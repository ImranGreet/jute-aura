<!-- Header -->
<header>
    <div class="container">
        <nav class="navbar">
            <a href="{{ route('home') }}" class="logo">Xen<span>mesh</span></a>
            <ul class="nav-links">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ url('/product-list') }}">Products</a></li>
                <li><a href="{{ url('/blog') }}">Blog</a></li>
                <li><a href="{{ url('/custom-design') }}">Custom Design</a></li>
                <li><a href="{{ url('/quality') }}">Quality</a></li>
                <li><a href="{{ url('/gift-box') }}">Gift Box</a></li>
            </ul>
            <div class="hamburger">
                <i class="fas fa-bars"></i>
            </div>
        </nav>
    </div>
</header>