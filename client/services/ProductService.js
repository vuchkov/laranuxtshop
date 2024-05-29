// services/ProductService.js
import axios from 'axios';

const baseURL = 'http://localhost:8000/api'; // Adjust based on your backend URL

export default {
  async getProducts() {
    const response = await axios.get(`${baseURL}/products`);
    return response.data;
  },

  async getProduct(productId) {
    const response = await axios.get(`${baseURL}/products/${productId}`);
    return response.data;
  },
  // ... add methods for other endpoints (list by category, cart)
};
