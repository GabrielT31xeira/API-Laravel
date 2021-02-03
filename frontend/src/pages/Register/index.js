import React, { useEffect, useState } from 'react';

import api from '../../services/api';

export default function NewDevice() {
    const [name, setName] = useState('');
    const [member_id, setMember_id] = useState('');

    const [ListMember, setListMember] = useState([]);

    useEffect(() => {
        async function fetchDataMember() {
            const res = await api.listMember();
            setListMember(res.data);
        }
        fetchDataMember();
    }, []);

    const createDevice = async (e) => {
        e.preventDefault();

        const data = {
            name,
            member_id
        }
        const res = await api.createDevice(data);

        if (res.success) {
            return alert("Cadastrado com sucesso: "+res.name);
        } else {
            return alert(res.message);
        }
    }
    return (
        <div>
            <form onSubmit={createDevice}>
                <div className="row">
                    <div className="col-md-6 mb-3">
                        <label>Name</label>
                        <input type="text" className="form-control"
                            placeholder="Name"
                            onChange={(event) => setName(event.target.value)} />
                    </div>
                </div>

                <div className="row">
                    <div className="col-md-6 mb-3">
                        <label>Member</label>
                        <select className="form-control"
                            onChange={(event) => setMember_id(event.target.value)}>
                            <option>Choose...</option>
                            {
                                ListMember.map((itemselect) => {
                                    return (
                                        <option value={itemselect.id_member}>{itemselect.member}</option>
                                    )
                                })
                            }
                        </select>
                    </div>
                </div>
                <div className="row">
                    <div className="col-md-6 mb-3">
                        <button className="btn btn-primary btn-block" type="submit">Save</button>
                    </div>
                </div>
            </form>
        </div>
    )
}

