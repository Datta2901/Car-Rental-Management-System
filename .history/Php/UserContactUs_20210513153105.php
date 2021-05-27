

<body>
   
    <hr class = "Rule">
            <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    <div class="card mt-5">
                        <div class="card-title">
                            <h2 class="text-center py-2"> Contact Us </h2>
                        </div>
                        <div class="card-body">
                            <form action="./Contactus.php" method="POST">
                                <input type="text" name="UserName" placeholder="User Name" class="form-control mb-2" required>
                                <input type="email" name="Email" placeholder="Email" class="form-control mb-2" required>
                                <input type="text" name="Subject" placeholder="Subject" class="form-control mb-2" required>
                                <textarea name="Msg" class="form-control mb-2" placeholder="Write The Message" required></textarea>
                                <button class="btn btn-success" name="Submit"> Submit </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        
            
            <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    <div class="card mt-5">
                        <div class="card-title">
                            <h2 class="text-center py-2">Feedback </h2>
                        </div>
                        <div class="card-body">
                            <form action="./FeedBack.php" method="POST">
                                <input type="text" name="UserName" placeholder="User Name" class="form-control mb-2" required>
                                <input type="email" name="Email" placeholder="Email" class="form-control mb-2" required>
                                <label>Rating<span style = "color: red;">&#42;</span></label>
                                <select name="Rating" required>
                                    <option value="" > Please Choose...</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                </select>
                                <textarea name="Suggestion" class="form-control mb-2" placeholder="Write Your suggests to improve" required></textarea>
                                <button class="btn btn-success" name="Submit"> Submit </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            </div> 
            <br>
    
    <div class = "symbols">
        <center>
            <br>
            <br>
            <a href="https://www.facebook.com/car.rental.756412/" class="fa fa-facebook"></a>
            <a href="https://twitter.com/CarRent43482780" class="fa fa-twitter"></a>
            <a href="https://mail.google.com/mail/u/4/#inbox?compose=GTvVlcRzBzBdRwpnHJlHjVzXXcWZTjvMQKzjNzxmvXWWRKdXRnkxWBxSvSSJsGTbSTFMVRxskcBzp" class="fa fa-google"></a>
            <a href="https://linkedin.com/in/car-rental-08b57b211" class="fa fa-linkedin"></a>
            <a href="https://www.instagram.com/_car._rental_/" class="fa fa-instagram"></a>
            <br>
            <br>
        </center>
    </div>
</body>
</html>
