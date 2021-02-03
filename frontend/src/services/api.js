import axios from 'axios';
const baseURL = 'http://127.0.0.1:8000/api';

const api = {};

api.listMember = async () => {
    const urlList = baseURL + '/listMember';
    const res = await axios.get(urlList)
        .then(res => {
            return res.data;
        })
        .catch(err => {
            return err;
        })
    return res;
}
api.createDevice = async (data) => {
    const urlCreate = baseURL + '/addDevice';
    const res = await axios.post(urlCreate, data)
        .then(res => {
            return res.data;
        })
        .catch(err => {
            return err;
        })
    return res;

}

export default api;