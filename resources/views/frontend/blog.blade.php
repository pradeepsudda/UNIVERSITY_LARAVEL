@extends('frontend.layouts.main')
@section('main-section')
            <h1>Our Certificates & Online Programs For 2022</h1>
    </section>

<!-------------------blog page content------------------->

<section class="blog">
    <div class="row">
        <div class="blog-left">
            <img src="images/certificate.jpg">
            <h2>Our Certificates & Online Programs For 2022</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Making website 
                is now one of the easiest thing in the world. you just need to learn 
                HTML,CSS,Javascript and you are good to go. 
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Making website 
                is now one of the easiest thing in the world. you just need to learn 
                HTML,CSS,Javascript and you are good to go. </p>
                <br>
            <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Making website 
            is now one of the easiest thing in the world. you just need to learn 
            HTML,CSS,Javascript and you are good to go. Lorem ipsum dolor sit amet,
            consectetur adipiscing elit. Making website .
            is now one of the easiest thing in the world. you just need to learn 
            HTML,CSS,Javascript and you are good to go you just need to learn 
            HTML,CSS,Javascript and you are good to go. Lorem ipsum dolor sit amet, consectetur 
            adipiscing elit. Making website is now one of the easiest thing in the world. 
            </p>
            <br>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Making website 
            is now one of the easiest thing in the world. you just need to learn 
            HTML,CSS,Javascript and you are good to go.
            you just need to learn HTML,CSS,Javascript and you are good to go. 
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Making website 
            is now one of the easiest thing in the world.
            </p>

            <div class="comment">

                <h3>Leave a Comment</h3>

                <form class="comment-form" autocomplete="off">

                    <input type="text" placeholder="Enter Name">

                    <input type="email" placeholder="Enter Email">

                    <textarea rows="5" placeholder="your comment">
                        
                    </textarea>

                    <button type="submit" class="btn r-btn">POST COMMENT</button>

                </form>
            </div>

        </div>
        <div class="blog-right">

            <h3>Post Categories</h3>
            <div>
                <span>Bussiness Analytics</span>
                <span>21</span>
            </div>
            <div>
                <span>Data Science</span>
                <span>28</span>
            </div>
            <div>
                <span>Machine Learning</span>
                <span>15</span>
            </div>
            <div>
                <span>Computer Science</span>
                <span>34</span>
            </div>
            <div>
                <span>Auto-Cad</span>
                <span>42</span>
            </div>
            <div>
                <span>Journalism</span>
                <span>35</span>
            </div>
            <div>
                <span>E-commerce</span>
                <span>25</span>
            </div>


        </div>
    </div>
</section>
@endsection
