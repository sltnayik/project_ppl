from flask import Flask, request, jsonify
from tensorflow.keras.models import load_model
from tensorflow.keras.preprocessing.image import img_to_array, load_img
import numpy as np
import os
from io import BytesIO

app = Flask(__name__)

# Load model Keras
model_path = os.path.join(os.path.dirname(__file__), 'model_pendeteksi_daun_jagung.keras')
model = load_model(model_path)

# Mapping class index ke label
class_indices = {'Blight (hawar)': 0, 'Common_Rust (karat)': 1, 'Gray_Leaf_Spot (bercak daun)': 2, 'Healthy (sehat)': 3}
idx_to_label = {v: k for k, v in class_indices.items()}

@app.route('/predict', methods=['POST'])
def predict():
    if 'image' not in request.files:
        return jsonify({'error': 'Tidak ada gambar dikirim'}), 400

    image = request.files['image']
    try:
        img = load_img(BytesIO(image.read()), target_size=(256, 256))
        img_array = img_to_array(img) / 255.0
        img_array = np.expand_dims(img_array, axis=0)

        prediction = model.predict(img_array)
        disease_pred = prediction[0]
        health_score = prediction[1][0][0]

        pred_class_idx = np.argmax(disease_pred)
        label = idx_to_label.get(pred_class_idx, 'Label tidak dikenal')
        confidence = float(disease_pred[0][pred_class_idx]) * 100

        # Pastikan semua nilai numerik di-cast ke float Python
        return jsonify({
            "label": label,
            "confidence": float(round(confidence, 2)),
            "health_score": float(round(health_score * 100, 2))
        })

    except Exception as e:
        print("ERROR:", str(e))
        return jsonify({'error': str(e)}), 500

if __name__ == '__main__':
    app.run(debug=True)
