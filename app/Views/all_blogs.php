<style>
    body{margin-top:20px;}
.blog-listing {
    padding-top: 30px;
    padding-bottom: 30px;
}
.gray-bg {
    background-color: #f5f5f5;
}
/* Blog 
---------------------*/
.blog-grid {
  box-shadow: 0 0 30px rgba(31, 45, 61, 0.125);
  border-radius: 5px;
  overflow: hidden;
  background: #ffffff;
  margin-top: 15px;
  margin-bottom: 15px;
}
.blog-grid .blog-img {
  position: relative;
}
.blog-grid .blog-img .date {
  position: absolute;
  background: #fc5356;
  color: #ffffff;
  padding: 8px 15px;
  left: 10px;
  top: 10px;
  border-radius: 4px;
}
.blog-grid .blog-img .date span {
  font-size: 22px;
  display: block;
  line-height: 22px;
  font-weight: 700;
}
.blog-grid .blog-img .date label {
  font-size: 14px;
  margin: 0;
}
.blog-grid .blog-info {
  padding: 20px;
}
.blog-grid .blog-info h5 {
  font-size: 22px;
  font-weight: 700;
  margin: 0 0 10px;
}
.blog-grid .blog-info h5 a {
  color: #20247b;
}
.blog-grid .blog-info p {
  margin: 0;
}
.blog-grid .blog-info .btn-bar {
  margin-top: 20px;
}


/* Blog Sidebar
-------------------*/
.blog-aside .widget {
  box-shadow: 0 0 30px rgba(31, 45, 61, 0.125);
  border-radius: 5px;
  overflow: hidden;
  background: #ffffff;
  margin-top: 15px;
  margin-bottom: 15px;
  width: 100%;
  display: inline-block;
  vertical-align: top;
}
.blog-aside .widget-body {
  padding: 15px;
}
.blog-aside .widget-title {
  padding: 15px;
  border-bottom: 1px solid #eee;
}
.blog-aside .widget-title h3 {
  font-size: 20px;
  font-weight: 700;
  color: #fc5356;
  margin: 0;
}
.blog-aside .widget-author .media {
  margin-bottom: 15px;
}
.blog-aside .widget-author p {
  font-size: 16px;
  margin: 0;
}
.blog-aside .widget-author .avatar {
  width: 70px;
  height: 70px;
  border-radius: 50%;
  overflow: hidden;
}
.blog-aside .widget-author h6 {
  font-weight: 600;
  color: #20247b;
  font-size: 22px;
  margin: 0;
  padding-left: 20px;
}
.blog-aside .post-aside {
  margin-bottom: 15px;
}
.blog-aside .post-aside .post-aside-title h5 {
  margin: 0;
}
.blog-aside .post-aside .post-aside-title a {
  font-size: 18px;
  color: #20247b;
  font-weight: 600;
}
.blog-aside .post-aside .post-aside-meta {
  padding-bottom: 10px;
}
.blog-aside .post-aside .post-aside-meta a {
  color: #6F8BA4;
  font-size: 12px;
  text-transform: uppercase;
  display: inline-block;
  margin-right: 10px;
}
.blog-aside .latest-post-aside + .latest-post-aside {
  border-top: 1px solid #eee;
  padding-top: 15px;
  margin-top: 15px;
}
.blog-aside .latest-post-aside .lpa-right {
  width: 90px;
}
.blog-aside .latest-post-aside .lpa-right img {
  border-radius: 3px;
}
.blog-aside .latest-post-aside .lpa-left {
  padding-right: 15px;
}
.blog-aside .latest-post-aside .lpa-title h5 {
  margin: 0;
  font-size: 15px;
}
.blog-aside .latest-post-aside .lpa-title a {
  color: #20247b;
  font-weight: 600;
}
.blog-aside .latest-post-aside .lpa-meta a {
  color: #6F8BA4;
  font-size: 12px;
  text-transform: uppercase;
  display: inline-block;
  margin-right: 10px;
}

.tag-cloud a {
  padding: 4px 15px;
  font-size: 13px;
  color: #ffffff;
  background: #20247b;
  border-radius: 3px;
  margin-right: 4px;
  margin-bottom: 4px;
}
.tag-cloud a:hover {
  background: #fc5356;
}

.blog-single {
  padding-top: 30px;
  padding-bottom: 30px;
}

.article {
  box-shadow: 0 0 30px rgba(31, 45, 61, 0.125);
  border-radius: 5px;
  overflow: hidden;
  background: #ffffff;
  padding: 15px;
  margin: 15px 0 30px;
}
.article .article-title {
  padding: 15px 0 20px;
}
.article .article-title h6 {
  font-size: 14px;
  font-weight: 700;
  margin-bottom: 20px;
}
.article .article-title h6 a {
  text-transform: uppercase;
  color: #fc5356;
  border-bottom: 1px solid #fc5356;
}
.article .article-title h2 {
  color: #20247b;
  font-weight: 600;
}
.article .article-title .media {
  padding-top: 15px;
  border-bottom: 1px dashed #ddd;
  padding-bottom: 20px;
}
.article .article-title .media .avatar {
  width: 45px;
  height: 45px;
  border-radius: 50%;
  overflow: hidden;
}
.article .article-title .media .media-body {
  padding-left: 8px;
}
.article .article-title .media .media-body label {
  font-weight: 600;
  color: #fc5356;
  margin: 0;
}
.article .article-title .media .media-body span {
  display: block;
  font-size: 12px;
}
.article .article-content h1,
.article .article-content h2,
.article .article-content h3,
.article .article-content h4,
.article .article-content h5,
.article .article-content h6 {
  color: #20247b;
  font-weight: 600;
  margin-bottom: 15px;
}
.article .article-content blockquote {
  max-width: 600px;
  padding: 15px 0 30px 0;
  margin: 0;
}
.article .article-content blockquote p {
  font-size: 20px;
  font-weight: 500;
  color: #fc5356;
  margin: 0;
}
.article .article-content blockquote .blockquote-footer {
  color: #20247b;
  font-size: 16px;
}
.article .article-content blockquote .blockquote-footer cite {
  font-weight: 600;
}
.article .tag-cloud {
  padding-top: 10px;
}

.article-comment {
  box-shadow: 0 0 30px rgba(31, 45, 61, 0.125);
  border-radius: 5px;
  overflow: hidden;
  background: #ffffff;
  padding: 20px;
}
.article-comment h4 {
  color: #20247b;
  font-weight: 700;
  margin-bottom: 25px;
  font-size: 22px;
}
img {
    max-width: 100%;
}
img {
    vertical-align: middle;
    border-style: none;
}

    </style>

<style {csp-style-nonce}>
        * {
            transition: background-color 300ms ease, color 300ms ease;
        }
        *:focus {
            background-color: rgba(221, 72, 20, .2);
            outline: none;
        }
        html, body {
            color: rgba(33, 37, 41, 1);
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji";
            font-size: 16px;
            margin: 0;
            padding: 0;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            text-rendering: optimizeLegibility;
        }
        header {
            background-color: rgba(247, 248, 249, 1);
            padding: .4rem 0 0;
        }
        .menu {
            padding: .4rem 2rem;
        }
        header ul {
            border-bottom: 1px solid rgba(242, 242, 242, 1);
            list-style-type: none;
            margin: 0;
            overflow: hidden;
            padding: 0;
            text-align: right;
        }
        header li {
            display: inline-block;
        }
        header li a {
            border-radius: 5px;
            color: rgba(0, 0, 0, .5);
            display: block;
            height: 44px;
            text-decoration: none;
        }
        header li.menu-item a {
            border-radius: 5px;
            margin: 5px 0;
            height: 38px;
            line-height: 36px;
            padding: .4rem .65rem;
            text-align: center;
        }
        header li.menu-item a:hover,
        header li.menu-item a:focus {
            background-color: rgba(221, 72, 20, .2);
            color: rgba(221, 72, 20, 1);
        }
        header .logo {
            float: left;
            height: 44px;
            padding: .4rem .5rem;
        }
        header .menu-toggle {
            display: none;
            float: right;
            font-size: 2rem;
            font-weight: bold;
        }
        header .menu-toggle button {
            background-color: rgba(221, 72, 20, .6);
            border: none;
            border-radius: 3px;
            color: rgba(255, 255, 255, 1);
            cursor: pointer;
            font: inherit;
            font-size: 1.3rem;
            height: 36px;
            padding: 0;
            margin: 11px 0;
            overflow: visible;
            width: 40px;
        }
        header .menu-toggle button:hover,
        header .menu-toggle button:focus {
            background-color: rgba(221, 72, 20, .8);
            color: rgba(255, 255, 255, .8);
        }
        header .heroe {
            margin: 0 auto;
            max-width: 1100px;
            padding: 1rem 1.75rem 1.75rem 1.75rem;
        }
        header .heroe h1 {
            font-size: 2.5rem;
            font-weight: 500;
        }
        header .heroe h2 {
            font-size: 1.5rem;
            font-weight: 300;
        }
        section {
            margin: 0 auto;
            max-width: 1100px;
            padding: 2.5rem 1.75rem 3.5rem 1.75rem;
        }
        section h1 {
            margin-bottom: 2.5rem;
        }
        section h2 {
            font-size: 120%;
            line-height: 2.5rem;
            padding-top: 1.5rem;
        }
        section pre {
            background-color: rgba(247, 248, 249, 1);
            border: 1px solid rgba(242, 242, 242, 1);
            display: block;
            font-size: .9rem;
            margin: 2rem 0;
            padding: 1rem 1.5rem;
            white-space: pre-wrap;
            word-break: break-all;
        }
        section code {
            display: block;
        }
        section a {
            color: rgba(221, 72, 20, 1);
        }
        section svg {
            margin-bottom: -5px;
            margin-right: 5px;
            width: 25px;
        }
        .further {
            background-color: rgba(247, 248, 249, 1);
            border-bottom: 1px solid rgba(242, 242, 242, 1);
            border-top: 1px solid rgba(242, 242, 242, 1);
        }
        .further h2:first-of-type {
            padding-top: 0;
        }
        footer {
            background-color: rgba(221, 72, 20, .8);
            text-align: center;
        }
        footer .environment {
            color: rgba(255, 255, 255, 1);
            padding: 2rem 1.75rem;
        }
        footer .copyrights {
            background-color: rgba(62, 62, 62, 1);
            color: rgba(200, 200, 200, 1);
            padding: .25rem 1.75rem;
        }
        @media (max-width: 629px) {
            header ul {
                padding: 0;
            }
            header .menu-toggle {
                padding: 0 1rem;
            }
            header .menu-item {
                background-color: rgba(244, 245, 246, 1);
                border-top: 1px solid rgba(242, 242, 242, 1);
                margin: 0 15px;
                width: calc(100% - 30px);
            }
            header .menu-toggle {
                display: block;
            }
            header .hidden {
                display: none;
            }
            header li.menu-item a {
                background-color: rgba(221, 72, 20, .1);
            }
            header li.menu-item a:hover,
            header li.menu-item a:focus {
                background-color: rgba(221, 72, 20, .7);
                color: rgba(255, 255, 255, .8);
            }
        }
    </style>
<link rel="stylesheet" href="https://cdn.usebootstrap.com/bootstrap/4.4.1/css/bootstrap.min.css">
  
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />

<header>

    <div class="menu">
        <ul>
            <li class="logo">
                <a href="/" target="_blank">
                    Blogs App
                </a>
            </li>
            <li class="menu-toggle">
                <button onclick="toggleMenu();">&#9776;</button>
            </li>
            <li class="menu-item hidden"><a href="/">Home</a></li>
            <li class="menu-item hidden"><a href="/top-5-blogs">Top 5 Blogs</a></li>
            <li class="menu-item hidden"><a href="/all-blogs">All Blogs</a>
            </li>
            <li class="menu-item hidden"><a href="/create-a-blog">Create a Blog</a>
            </li>
        </ul>
    </div>


</header>
<section class="blog-listing gray-bg">
        <div class="container">
            <!-- section title -->
		<div class="row justify-content-md-center">
			<div class="col-xl-5 col-lg-6 col-md-8">
				<div class="section-title text-center title-ex1">
					<h2>All Blogs</h2>
				</div>
			</div>
		</div>
		<!-- section title ends -->
            <div class="row align-items-start">
                <div class="col-lg-12 m-15px-tb">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="blog-grid">
                                <div class="blog-img">
                                    <div class="date">
                                        <span>04</span>
                                        <label>FEB</label>
                                    </div>
                                    <a href="#">
                                        <img src="https://www.bootdey.com/image/400x200/FFB6C1/000000" title="" alt="">
                                    </a>
                                </div>
                                <div class="blog-info">
                                    <h5><a href="#">Prevent 75% of visitors from google analytics</a></h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <div class="btn-bar">
                                        <a href="#" class="px-btn-arrow">
                                            <span>Read More</span>
                                            <i class="arrow"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="blog-grid">
                                <div class="blog-img">
                                    <div class="date">
                                        <span>04</span>
                                        <label>FEB</label>
                                    </div>
                                    <a href="#">
                                        <img src="https://www.bootdey.com/image/400x200/D3D3D3/000000" title="" alt="">
                                    </a>
                                </div>
                                <div class="blog-info">
                                    <h5><a href="#">Prevent 75% of visitors from google analytics</a></h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <div class="btn-bar">
                                        <a href="#" class="px-btn-arrow">
                                            <span>Read More</span>
                                            <i class="arrow"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="blog-grid">
                                <div class="blog-img">
                                    <div class="date">
                                        <span>04</span>
                                        <label>FEB</label>
                                    </div>
                                    <a href="#">
                                        <img src="https://www.bootdey.com/image/400x200/87CEFA/000000" title="" alt="">
                                    </a>
                                </div>
                                <div class="blog-info">
                                    <h5><a href="#">Prevent 75% of visitors from google analytics</a></h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <div class="btn-bar">
                                        <a href="#" class="px-btn-arrow">
                                            <span>Read More</span>
                                            <i class="arrow"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="blog-grid">
                                <div class="blog-img">
                                    <div class="date">
                                        <span>04</span>
                                        <label>FEB</label>
                                    </div>
                                    <a href="#">
                                        <img src="https://www.bootdey.com/image/400x200/D3D3D3/000000" title="" alt="">
                                    </a>
                                </div>
                                <div class="blog-info">
                                    <h5><a href="#">Prevent 75% of visitors from google analytics</a></h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <div class="btn-bar">
                                        <a href="#" class="px-btn-arrow">
                                            <span>Read More</span>
                                            <i class="arrow"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="blog-grid">
                                <div class="blog-img">
                                    <div class="date">
                                        <span>04</span>
                                        <label>FEB</label>
                                    </div>
                                    <a href="#">
                                        <img src="https://www.bootdey.com/image/400x200/E0FFFF/000000" title="" alt="">
                                    </a>
                                </div>
                                <div class="blog-info">
                                    <h5><a href="#">Prevent 75% of visitors from google analytics</a></h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <div class="btn-bar">
                                        <a href="#" class="px-btn-arrow">
                                            <span>Read More</span>
                                            <i class="arrow"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="blog-grid">
                                <div class="blog-img">
                                    <div class="date">
                                        <span>04</span>
                                        <label>FEB</label>
                                    </div>
                                    <a href="#">
                                        <img src="https://www.bootdey.com/image/400x200/FFF0F5/000000" title="" alt="">
                                    </a>
                                </div>
                                <div class="blog-info">
                                    <h5><a href="#">Prevent 75% of visitors from google analytics</a></h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <div class="btn-bar">
                                        <a href="#" class="px-btn-arrow">
                                            <span>Read More</span>
                                            <i class="arrow"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <ul class="pagination justify-content-center">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item active">
                                    <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- <div class="col-lg-4 m-15px-tb blog-aside"> -->
                  
                    <!-- widget Tags -->
                    <!-- <div class="widget widget-tags">
                        <div class="widget-title">
                            <h3>Latest Tags</h3>
                        </div>
                        <div class="widget-body">
                            <div class="nav tag-cloud">
                                <a href="#">Design</a>
                                <a href="#">Development</a>
                                <a href="#">Travel</a>
                                <a href="#">Travel</a>
                                <a href="#">Travel</a>
                                <a href="#">Travel</a>
                                <a href="#">Travel</a>
                            </div>
                        </div>
                    </div> -->
                    <!-- End widget Tags -->
                <!-- </div> -->
            </div>
        </div>
    </section>