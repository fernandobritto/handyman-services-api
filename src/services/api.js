import axios from 'axios'
const api = axios.create({ baseURL: 'http://localhost:2020/api'})
export default api