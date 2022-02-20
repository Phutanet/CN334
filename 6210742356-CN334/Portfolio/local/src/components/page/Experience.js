import React, { Component } from 'react'
import '../css/Experience.css'
import axios from 'axios'

import blogJPG from '../../images/blog.jpg'
import gitJPG from '../../images/git.png'

class Experience extends Component {

    state = {
        modalShow: '',
        modalCreateShow: '',
        nameProject: '',
        linkProject: '',
        projects: [],
        loading: true,
        id: ''
    }

    handleInput = (e) => {
        this.setState({
            [e.target.name]: e.target.value
        })
    }

    onReadMore = () => {
        if (this.state.modalShow === '') {
            this.setState({
                modalShow: 'show'
            })
        } else {
            this.setState({
                modalShow: ''
            })
        }
    }

    onCreateMore = () => {
        if (this.state.modalCreateShow === '') {
            this.setState({
                modalCreateShow: 'active',
                nameProject: '',
                linkProject: '',
            })
            console.log(this.state.modalCreateShow)
        } else {
            this.setState({
                modalCreateShow: '',
                nameProject: '',
                linkProject: '',
            })
            console.log(this.state.modalCreateShow)
        }
    }

    saveProject = async (e) => {
        e.preventDefault()

        const res = await axios.post('/api/projects', {
            'nameProject': this.state.nameProject,
            'linkProject': this.state.linkProject
        })
        if (res.data.status === 200) {
            console.log(res.data.message)
            this.setState({
                nameProject: '',
                linkProject: '',
                modalCreateShow: '',
                loading : true
            })
            const resp = await axios.get('/api/projects')
            if (resp.data.status === 200) {
                this.setState({
                    projects: resp.data.projects,
                    loading: false
                })
            }
        }
    }

    async componentDidMount() {
        const res = await axios.get('/api/projects')
        if (res.data.status === 200) {
            this.setState({
                projects: res.data.projects,
                loading: false
            })
        }
    }

    async updateProject(event, id) {

        const res = await axios.get(`/api/projects/${id}`, this.state)

        if (res.data.status === 200) {
            this.setState({
                nameProject: res.data.project.nameProject,
                linkProject: res.data.project.linkProject,
                id: id
            })
        }

        this.setState({
            modalShow: 'show'
        })
    }

    onSubmitUpdateProject = async (e) => {
        e.preventDefault()

        const res = await axios.put(`/api/projects/${this.state.id}`, {
            'nameProject': this.state.nameProject,
            'linkProject': this.state.linkProject
        })
        if (res.data.status === 200) {
            console.log(res.data.message)
            this.setState({
                nameProject: '',
                linkProject: '',
                modalCreateShow: '',
                loading : true
            })
            const resp = await axios.get('/api/projects')
            if (resp.data.status === 200) {
                this.setState({
                    projects: resp.data.projects,
                    loading: false
                })
            }

        }
    }

    deleteProject = async (e, id) => {
        const res = await axios.delete(`/api/projects/${id}`)
        if (res.data.status === 200) {
            console.log(res.data.message)
            this.setState({
                loading:true
            })
            const resp = await axios.get('/api/projects')
            if (resp.data.status === 200) {
                this.setState({
                    projects: resp.data.projects,
                    loading: false
                })
            }

        }
    }

    render() {

        var table = ''

        if (this.state.loading) {
            table = <article><div className='text'><h3>Loading..</h3></div></article>
        } else {
            table = this.state.projects.map((i) => {
                return (
                    <article>
                        <img src={gitJPG} />
                        <div className='text'>
                            <h3>{i.nameProject}</h3>
                            <p><a href={i.linkProject}>Read More</a></p>
                            <button className='up-btn' onClick={(e) => {
                                this.updateProject(e, i.id)
                            }}>update</button>
                            <button className='del-btn' onClick={(e) => {
                                this.deleteProject(e, i.id)
                            }}>delete</button>
                        </div>
                    </article>
                )
            })
        }

        return (
            <div className='container' id='project'>
                <h1 className='blog-title'>Project</h1>
                <main className='grid'>
                    <article>
                        <img src={blogJPG} />
                        <div className='text'>
                            <h3>Project</h3>
                            <p>Create More</p>
                            <button className='c-btn' onClick={this.onCreateMore}>create</button>
                        </div>
                    </article>

                    {table}

                </main>

                <div className={'modal ' + this.state.modalCreateShow} id="modal">
                    <div className="modal__wrapper">
                        <h3>Project</h3>
                        <form onSubmit={this.saveProject}>
                            <p>Project Name</p>
                            <input required type="text" onChange={this.handleInput} value={this.state.nameProject} name='nameProject' />
                            <p>Project Link</p>
                            <input required type="text" onChange={this.handleInput} value={this.state.linkProject} name='linkProject' />
                            <div className="btn-group">
                                <button type="submit" className="submit-btn">Submit</button>
                                <a className="cancel-btn modal__close" onClick={this.onCreateMore}>Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>

                <div className={'modal ' + this.state.modalShow} id="modal">
                    <div className="modal__wrapper">
                        <h3>Update Project</h3>
                        <form onSubmit={this.onSubmitUpdateProject}>
                            <p>Project Name</p>
                            <input required type="text" onChange={this.handleInput} value={this.state.nameProject} name='nameProject' />
                            <p>Project Link</p>
                            <input required type="text" onChange={this.handleInput} value={this.state.linkProject} name='linkProject' />
                            <div className="btn-group">
                                <button type="submit" className="submit-btn" onClick={this.onReadMore}>Submit</button>
                                <a className="cancel-btn modal__close" onClick={this.onReadMore}>Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        )
    }
}

export default Experience;