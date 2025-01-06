<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Library</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Custom CSS */
        body {
            padding-top: 56px;
            /* Adjust for fixed navbar */
        }

        .book-card {
            margin-bottom: 20px;
        }

        #search-results {
            display: none;
            /* Initially hide the search results */
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="#">Book Haven</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#books">Books</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#registration">Register</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" id="search-input" placeholder="Search books..."
                    aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit" id="search-button">Search</button>
            </form>
        </div>
    </nav>

    <section id="about" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <h2>About Our Book Library</h2>
                    <p>Welcome to Book Haven! We are a community-driven library passionate about sharing the joy of
                        reading. Our collection features a diverse range of genres, from classic literature to
                        contemporary fiction, non-fiction, and more. We believe in the power of books to educate,
                        inspire, and entertain.</p>
                    <p>Become a member today to gain access to our full catalog, participate in book discussions, and
                        attend exclusive events.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="books" class="bg-light py-5">
        <div class="container">
            <h2 class="text-center mb-4">Our Book Collection</h2>
            <div class="row" id="book-list">
                <div class="col-lg-4 col-md-6">
                    <div class="card book-card">
                        <img src="https://via.placeholder.com/300x400?text=Book+Cover" class="card-img-top"
                            alt="Book Title 1">
                        <div class="card-body">
                            <h5 class="card-title">Book Title 1</h5>
                            <p class="card-text">Author 1</p>
                            <p class="card-text">Brief description of the book...</p>
                            <a href="#" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="card book-card">
                        <img src="https://via.placeholder.com/300x400?text=Book+Cover" class="card-img-top"
                            alt="Book Title 2">
                        <div class="card-body">
                            <h5 class="card-title">Book Title 2</h5>
                            <p class="card-text">Author 2</p>
                            <p class="card-text">Brief description of the book...</p>
                            <a href="#" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="card book-card">
                        <img src="https://via.placeholder.com/300x400?text=Book+Cover" class="card-img-top"
                            alt="Book Title 3">
                        <div class="card-body">
                            <h5 class="card-title">Book Title 3</h5>
                            <p class="card-text">Author 3</p>
                            <p class="card-text">Brief description of the book...</p>
                            <a href="#" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row" id="search-results"></div>
        </div>
    </section>

    <section id="registration" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h2 class="text-center mb-4">Become a Member</h2>
                    <form>
                        <div class="form-group">
                            <label for="name">Full Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter your full name"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="email" class="form-control" id="email" aria-describedby="emailHelp"
                                placeholder="Enter your email" required>
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with
                                anyone else.</small>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" placeholder="Password"
                                required>
                        </div>
                        <button type="submit" class="btn btn-primary">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-dark text-white py-3">
        <div class="container text-center">
            <p>&copy; 2023 Book Haven. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#search-button').click(function(event) {
                event.preventDefault(); // Prevent form submission
                const searchTerm = $('#search-input').val().toLowerCase();
                $('#book-list').hide(); // Hide the original book list
                $('#search-results').empty().show(); // Clear and show the results container

                let found = false;
                $('#book-list .card').each(function() {
                    const title = $(this).find('.card-title').text().toLowerCase();
                    const author = $(this).find('.card-text:first').text().toLowerCase();
                    const description = $(this).find('.card-text').last().text().toLowerCase();
                    if (title.includes(searchTerm) || author.includes(searchTerm) || description
                        .includes(searchTerm)) {
                        // Clone the matching book card and add it to the search results
                        const clonedCard = $(this).clone();
                        $('#search-results').append($('<div class="col-lg-4 col-md-6">').append(
                            clonedCard));
                        found = true;
                    }
                });

                if (!found) {
                    $('#search-results').html(
                        '<div class="col-12"><p>No books found matching your search.</p></div>');
                }
            });
        });
    </script>
</body>

</html>
