import React, { useState } from 'react'
import './Blog.css'

import blogJPG from '../../images/blog.jpg'

const Blog = () => {

    const [modalShow, setModalShow] = useState('')

    const onReadMore = () => {
        if (modalShow === '') {
            setModalShow('show')
        } else {
            setModalShow('')
        }
    }

    return (
        <div className='container' id='project'>
            <h1 className='blog-title'>Project</h1>
            <main className='grid'>
                <article>
                    <img src={blogJPG} />
                    <div className='text'>
                        <h3>HTML</h3>
                        <p>Read More</p>
                        <button className='up-btn' onClick={onReadMore}>Read More</button>
                    </div>
                </article>
            </main>

            <div className={'modal ' + modalShow} id="modal">
                <div className="modal__wrapper">
                    <img src={blogJPG} />
                    <p className='p-title'>Project Name</p>
                    <p>Description</p>
                    <div className="btn-group">
                        <button class="cancel-btn modal__close" onClick={onReadMore}>Back</button>
                    </div>
                </div>
            </div>
        </div>
    )
}

export default Blog;

{/* <div class="modal" id="modal">
                <div class="modal__wrapper">
                    <h3>Create Project</h3>
                    <form action="#">
                        <p>Project Name</p>
                        <input required type="text" />
                        <p>Project Link</p>
                        <input required type="text" />
                        <div class="btn-group">
                            <button type="submit" class="submit-btn">Submit</button>
                            <button class="cancel-btn modal__close">Cancel</button>
                        </div>
                    </form>
                </div>
            </div> */}