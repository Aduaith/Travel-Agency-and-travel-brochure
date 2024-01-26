
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voyage Vista - Your Trusted Travel Companion</title>
    <style>
        /* Add your CSS styles here */
        /* Add a semi-transparent overlay */
        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.3); /* Adjust the alpha value (0.3) to control the overlay opacity */
        }

        body {
            font-family: "Arial, sans-serif";
            font-size: 38px; /* Adjust the font size as needed */
            background: linear-gradient(to right, #4a90e2, #63d8f4); /* Add a light background color */
           
        }

        header {
            background-color: #3498db;
            color: #fff;
            text-align: center;
            padding: 20px;
            font-size: 60px;
        }

        header h1 {
            font-size: 70px;
            font-style: italic;
        }

        header h2 {
            font-size: 50px;
            font-style: italic;
        }

        nav {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            margin: 10px;
            color: white;
            font-size: 60px; /* Adjust the font size as needed */
        }

        .section {
            margin: 20px;
            padding: 10px;
            border: 1px solid #ccc;
            font-size: 40px; /* Adjust the font size as needed */
            background: white; /* Add a white background color */
        }

        
    .user-info {
        position: absolute;
        top: 4%;
        right: 5%;
        font-size: 50px;
        color: #fff;
        background-color: black;
        padding: 10px;
        border-radius: 5px;
    }
</style>


</head>

<body>
    <header>
        <h1>Voyage Vista</h1>
        <h2>Your Trusted Travel Companion</h2>
        <h3>TRAVEL AGENCY WEBSITE</h3>
    </header>
    <nav>
        <a href="package.php">Travel Packages</a>
        <a href="destinations.php">Destinations</a>
        <a href="hotel.html">Hotels</a>
        <a href="flights.html">Flights</a>
        <a href="insurance.html">Travel Insurance</a>
        <a href="blogs.html">Travel blogs</a>
        <a href="register1.html">Register</a>
        <a href="contact.html">Contact</a>
        <a href="dashboard.php">User Dashboard</a>
        <a href="packagedestinations.php"> </a>
    </nav>

    <!-- Display user info at the top right -->
   


    <section class="section" id="holidays">
        <h2>Holidays</h2>
        <!-- Add holiday content here -->
        <div class="holidays">
            <h3>Relaxing Beach Getaway</h3>
            <p>Escape to the pristine beaches of Bali, Indonesia, and unwind in luxury beachfront resorts. Enjoy sun, sea, and sand at its best.</p>
            
            <!-- Add an image of a beach -->
            <img src="beach.jpg" alt="Beach Image" width="700" height="600">
            <img src="beach2.jpg" alt="Beach Image" width="700" height="600">
            <img src="beach3.jpg" alt="Beach Image" width="700" height="600">
            
            <h3>Cultural Adventure in Italy</h3>
            <p>Experience the rich history and culture of Italy. Visit iconic cities like Rome, Florence, and Venice, and savor authentic Italian cuisine.</p>
            <img src="italy.jpg" alt="Italy Image" width="700" height="600">
            <img src="italy2.jpg" alt="Italy Image" width="700" height="600">
            <img src="italy3.jpg" alt="Italy Image" width="700" height="600">
            <h3>Wildlife Safari in Africa</h3>
            <p>Embark on a thrilling safari adventure in the heart of Africa. Witness the incredible wildlife of the savannah, including lions, elephants, and giraffes.</p>
            <img src="africa.jpg" alt="Africa Image" width="700" height="600">
            <img src="africa3.jpg" alt="Africa Image" width="700" height="600">
            <img src="africa2.jpg" alt="Africa Image" width="700" height="600">
        </div>
    </section>

    <section class="section" id="offers">
        <h2>Special Offers</h2>
        <!-- Add special offers content here -->
        <div class="offers" style="display: flex; justify-content: space-between;">
            <div class="offer" style="flex: 1; text-align: center; padding: 20px; background-color: #f9f9f9; border: 2px solid #3498db; border-radius: 10px; margin: 10px;">
                <h3 style="font-size: 60px; color: #3498db;">Early Bird Discount</h3>
                <p style="font-size: 40px;">Book your next vacation early and get a 20% discount on select destinations. Don't miss this limited-time offer!</p>
                <a href="#" style="font-size: 40px; color: #3498db; text-decoration: none; display: block; margin-top: 40px;">Learn More</a>
            </div>
            <div class="offer" style="flex: 1; text-align: center; padding: 20px; background-color: #f9f9f9; border: 2px solid #3498db; border-radius: 10px; margin: 10px;">
                <h3 style="font-size: 60px; color: #3498db;">Family Vacation Package</h3>
                <p style="font-size: 40px;">Plan a family getaway with our special package. Kids stay and eat for free at our family-friendly resorts.</p>
                <a href="#" style="font-size: 40px; color: #3498db; text-decoration: none; display: block; margin-top: 40px;">Learn More</a>
            </div>
            <div class="offer" style="flex: 1; text-align: center; padding: 20px; background-color: #f9f9f9; border: 2px solid #3498db; border-radius: 10px; margin: 10px;">
                <h3 style="font-size: 60px; color: #3498db;">Romantic Honeymoon Getaway</h3>
                <p style="font-size: 40px;">Celebrate your love with a romantic honeymoon package. Enjoy special amenities and romantic dinners in exotic locations.</p>
                <a href="#" style="font-size: 40px; color: #3498db; text-decoration: none; display: block; margin-top: 40px;">Learn More</a>
            </div>
    </section>
    <section class="section" id="travel insurance">
    <h2>Travel Insurance</h2>
    <p>Travel insurance is a crucial part of any trip. It provides financial protection and peace of mind in case unexpected events disrupt your travel plans. Here are some key reasons why you should consider travel insurance:</p>
    <ul>
        <li>Medical Coverage: Travel insurance can cover medical expenses if you get sick or injured while traveling.</li>
        <li>Trip Cancellation: It can reimburse you if you have to cancel your trip due to unforeseen circumstances.</li>
        <li>Baggage Protection: You'll be compensated for lost, stolen, or damaged luggage.</li>
        <li>Emergency Assistance: Access to 24/7 assistance for emergencies such as medical evacuations.</li>
    </ul>

    <h2>Types of Travel Insurance</h2>
    <p>There are several types of travel insurance to choose from, depending on your needs:</p>
    <ul>
        <li>Single Trip Insurance: Covers one specific trip.</li>
        <li>Annual Multi-Trip Insurance: Ideal for frequent travelers, covering multiple trips within a year.</li>
        <li>Medical-Only Insurance: Focuses on medical coverage without trip cancellation benefits.</li>
        <li>Comprehensive Insurance: Offers a wide range of coverage, including medical, trip cancellation, and baggage protection.</li>
    </ul>

    <h2>How to Choose Travel Insurance</h2>
    <p>When selecting travel insurance, consider the following:</p>
    <ul>
        <li>Your destination and the level of healthcare available there.</li>
        <li>The activities you plan to do during your trip (e.g., adventure sports).</li>
        <li>The value of your trip and belongings.</li>
        <li>Your health and any pre-existing medical conditions.</li>
    </ul>

    <h2>Get a Quote</h2>
    <p>Ready to get travel insurance? Fill out the form below to get a quote from our trusted insurance partners:</p>
    
    <form action="insurance_quote.php" method="post">
        <label for="destination">Destination:</label>
        <input type="text" id="destination" name="destination" required>
        
        <label for="trip_date">Trip Date:</label>
        <input type="date" id="trip_date" name="trip_date" required>
        
        <label for="coverage_type">Coverage Type:</label>
        <select id="coverage_type" name="coverage_type" required>
            <option value="single_trip">Single Trip Insurance</option>
            <option value="annual_multi_trip">Annual Multi-Trip Insurance</option>
            <option value="medical_only">Medical-Only Insurance</option>
            <option value="comprehensive">Comprehensive Insurance</option>
        </select>
        
        <button type="submit">Get Quote</button>
    </form>
</section>

    <section class="section" id="about-us">
        <h2>About Us</h2>
        <!-- Add about us content here -->
        <p>Welcome to Voyage Vista, your gateway to unforgettable travel experiences. With a passion for exploring the world and a commitment to providing exceptional journeys, we've been making travel dreams come true for over a decade.</p>
    
        <p>Our team of experienced and dedicated travel experts is here to guide you on your adventures. We believe that travel is not just about visiting places; it's about creating memories, forging connections, and discovering the beauty of the world.</p>

        <p>At Voyage Vista, we take pride in curating unique travel packages, ensuring that every detail is taken care of, from accommodation to activities. Whether you're seeking cultural immersion, relaxation on pristine beaches, or thrilling adventures, we've got you covered.</p>

        <p>Our commitment to sustainability and responsible travel means that you can explore the world while also caring for it. We partner with local communities to ensure a positive impact on the destinations we visit.</p>

        <p>Join us on a journey that will leave you with lifelong memories and a deeper appreciation for the diversity and wonder of our planet. We look forward to being your travel companion on your next voyage.</p>
    </section>
    <section class="section" id="contact">
        <h2>Contact Us</h2>
        <p>If you have any questions or need assistance, please contact us:</p>
        <p>Email: info@travelbrochure.com</p>
        <p>Phone: +1 (123) 456-7890</p>
    </section>

  
</body>

</html>
