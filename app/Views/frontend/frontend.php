<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kantina Dili Institute of Technology</title>
</head>

<body>
    <nav class="navbar">
        <div class="nav-brand">
            <img src="<?= base_url(); ?>public/images/Canteen-Logo.png" alt="Logo" class="logo">
            <h1>Kantina Dili Institute of Technology</h1>
        </div>
        <div class="nav-menu">
            <a href="#" class="nav-link">Home</a>
            <a href="<?= base_url('home') ?>" class="nav-link">Dashboard</a>
            <a href="#" class="nav-link">Pages</a>
            <a href="#" class="nav-link">Listing</a>
            <a class="login-btn" href="<?= base_url('auth/login') ?>">
                Login
            </a>
        </div>
    </nav>

    <div class="hero">
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <h1>Kantina Dili Institute of Technology</h1>
        </div>
    </div>

    <div class="search-section">
        <div class="search-container">
            <input type="text" placeholder="Hatama naran alumni..." class="search-input">
            <select class="category-select">
                <option value="" selected disabled>Category</option>
                <option value="makanan">Hahan</option>
                <option value="minuman">Hemu</option>
            </select>
            <button class="search-btn">Search Now</button>
        </div>

        <style>
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
                font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            }

            body {
                background-color: #f5f5f5;
            }

            .navbar {
                display: flex;
                justify-content: space-between;
                align-items: center;
                padding: 1rem 4rem;
                background-color: white;
                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
                position: fixed;
                width: 100%;
                top: 0;
                z-index: 1000;
            }

            .nav-brand {
                display: flex;
                align-items: center;
                gap: 1rem;
            }

            .nav-brand img {
                height: 45px;
                width: auto;
            }

            .nav-brand h1 {
                font-size: 1.25rem;
                font-weight: 600;
                color: #333;
            }

            .nav-menu {
                display: flex;
                align-items: center;
                gap: 2.5rem;
            }

            .nav-link {
                text-decoration: none;
                color: #4a5568;
                font-weight: 500;
                font-size: 1rem;
                transition: color 0.2s ease;
            }

            .nav-link:hover {
                color: #2563eb;
            }

            .login-btn {
                background-color: #2563eb;
                color: white;
                border: none;
                padding: 0.625rem 1.5rem;
                border-radius: 6px;
                font-weight: 500;
                cursor: pointer;
                transition: background-color 0.2s ease;
                text-decoration: none;
                /* Ensure it looks like a button */
            }

            .login-btn:hover {
                background-color: #1d4ed8;
            }

            .hero {
                height: 70vh;
                position: relative;
                background: url('<?= base_url(); ?>public/images/background-canteen.jpg') center/cover no-repeat;
                margin-top: 73px;
            }

            .hero-overlay {
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                background: rgba(0, 0, 0, 0.6);
            }

            .hero-content {
                position: relative;
                z-index: 1;
                height: 100%;
                display: flex;
                justify-content: center;
                align-items: center;
                text-align: center;
                padding: 0 2rem;
            }

            .hero-content h1 {
                color: white;
                font-size: 3.5rem;
                font-weight: 700;
                max-width: 800px;
                text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
            }

            .search-section {
                padding: 2rem;
                margin-top: -2rem;
                position: relative;
                z-index: 2;
            }

            .search-container {
                max-width: 1200px;
                margin: 0 auto;
                display: flex;
                gap: 1rem;
                background: white;
                padding: 2rem;
                border-radius: 8px;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
            }

            .search-input {
                flex: 2;
                padding: 0.75rem 1rem;
                border: 1px solid #e2e8f0;
                border-radius: 6px;
                font-size: 1rem;
            }

            .category-select {
                flex: 1;
                padding: 0.75rem 1rem;
                border: 1px solid #e2e8f0;
                border-radius: 6px;
                font-size: 1rem;
                background-color: white;
                cursor: pointer;
            }

            .search-btn {
                padding: 0.75rem 2rem;
                background-color: #2563eb;
                color: white;
                border: none;
                border-radius: 6px;
                font-weight: 500;
                cursor: pointer;
                transition: background-color 0.2s ease;
            }

            .search-btn:hover {
                background-color: #1d4ed8;
            }

            @media (max-width: 1024px) {
                .navbar {
                    padding: 1rem 2rem;
                }

                .hero-content h1 {
                    font-size: 2.5rem;
                }
            }

            @media (max-width: 768px) {
                .nav-menu {
                    display: none;
                }

                .search-container {
                    flex-direction: column;
                }

                .hero-content h1 {
                    font-size: 2rem;
                }
            }
        </style>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                // Mobile menu toggle
                // const createMobileMenu = () => {
                //     const navbar = document.querySelector('.navbar');
                //     const mobileMenuBtn = document.createElement('button');
                //     mobileMenuBtn.classList.add('mobile-menu-btn');
                //     mobileMenuBtn.innerHTML = '☰';

                //     if (window.innerWidth <= 768) {
                //         if (!document.querySelector('.mobile-menu-btn')) {
                //             navbar.appendChild(mobileMenuBtn);
                //         }
                //     }

                //     mobileMenuBtn.addEventListener('click', () => {
                //         const navMenu = document.querySelector('.nav-menu');
                //         navMenu.style.display = navMenu.style.display === 'flex' ? 'none' : 'flex';
                //     });
                // };

                // Search functionality with console log for debugging
                const searchBtn = document.querySelector('.search-btn');
                const searchInput = document.querySelector('.search-input');
                const categorySelect = document.querySelector('.category-select');

                searchBtn.addEventListener('click', () => {
                    console.log('Search button clicked'); // Debugging log
                    const searchTerm = searchInput.value.trim();
                    const category = categorySelect.value;

                    if (!searchTerm) {
                        searchInput.style.border = '1px solid #ef4444';
                        setTimeout(() => {
                            searchInput.style.border = '1px solid #e2e8f0';
                        }, 2000);
                        return;
                    }

                    // Here you would typically make an API call
                    console.log('Searching:', {
                        term: searchTerm,
                        category: category
                    });
                });

                // Initialize mobile menu
                createMobileMenu();
                window.addEventListener('resize', createMobileMenu);

                // Smooth scroll for navigation links
                document.querySelectorAll('.nav-link').forEach(link => {
                    link.addEventListener('click', (e) => {
                        e.preventDefault();
                        const href = link.getAttribute('href');
                        if (href !== '#') {
                            window.scrollTo({
                                top: document.querySelector(href).offsetTop - 80,
                                behavior: 'smooth'
                            });
                        }
                    });
                });
            });
        </script>
</body>

</html>