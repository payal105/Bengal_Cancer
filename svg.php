<div class="svg-decorations">
    <!-- SVG Shapes -->
    <svg class="animated-shape shape1" xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 100 100">
        <circle cx="50" cy="50" r="40" stroke="#6CC0E3" stroke-width="4" fill="none" />
    </svg>

    <svg class="animated-shape shape2" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 100 100">
        <rect x="20" y="20" width="60" height="60" stroke="#A7D8B6" stroke-width="4" fill="none" />
    </svg>

    <svg class="animated-shape shape3" xmlns="http://www.w3.org/2000/svg" width="45" height="45" viewBox="0 0 100 100">
        <polygon points="50,10 90,90 10,90" stroke="#89B4B5" stroke-width="4" fill="none" />
    </svg>

    <svg class="animated-shape shape4" xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 100 100">
        <ellipse cx="50" cy="50" rx="40" ry="20" stroke="#D4F1C2" stroke-width="4" fill="none" />
    </svg>

    <svg class="animated-shape shape5" xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 100 100">
        <path d="M50 10 Q80 40 50 70 Q20 40 50 10 Z" stroke="#F7E6A0" stroke-width="4" fill="none" />
    </svg>

    <svg class="animated-shape shape6" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 100 100">
        <circle cx="50" cy="50" r="35" stroke="#9D74C6" stroke-width="4" fill="none" />
    </svg>

    <svg class="animated-shape shape7" xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 100 100">
        <polygon points="50,10 80,50 50,90 20,50" stroke="#A8D0E6" stroke-width="4" fill="none" />
    </svg>

    <svg class="animated-shape shape8" xmlns="http://www.w3.org/2000/svg" width="45" height="45" viewBox="0 0 100 100">
        <line x1="10" y1="10" x2="90" y2="90" stroke="#64A6A6" stroke-width="4" />
        <line x1="10" y1="90" x2="90" y2="10" stroke="#64A6A6" stroke-width="4" />
    </svg>

    <svg class="animated-shape shape9" xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 100 100">
        <rect x="10" y="10" width="80" height="80" rx="20" ry="20" stroke="#C4E1D6" stroke-width="4" fill="none" />
    </svg>

    <svg class="animated-shape shape10" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 100 100">
        <path d="M50,10 L90,50 L50,90 L10,50 Z" stroke="#A5D8DD" stroke-width="4" fill="none" />
    </svg>

    <!-- Hospital/Healthcare Related Icons -->
    <svg class="animated-shape shape11" xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 100 100">
        <rect x="10" y="10" width="80" height="80" rx="10" ry="10" stroke="#A5D8DD" stroke-width="4" fill="none" />
        <line x1="50" y1="10" x2="50" y2="90" stroke="#A5D8DD" stroke-width="4" />
        <line x1="10" y1="50" x2="90" y2="50" stroke="#A5D8DD" stroke-width="4" />
    </svg>

    <svg class="animated-shape shape12" xmlns="http://www.w3.org/2000/svg" width="45" height="45" viewBox="0 0 100 100">
        <path d="M50,20 L60,80 L40,80 Z" stroke="#9D74C6" stroke-width="4" fill="none" />
    </svg>

    <svg class="animated-shape shape13" xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 100 100">
        <circle cx="50" cy="50" r="40" stroke="#D4F1C2" stroke-width="4" fill="none" />
        <line x1="50" y1="50" x2="50" y2="10" stroke="#D4F1C2" stroke-width="4" />
    </svg>

    <svg class="animated-shape shape14" xmlns="http://www.w3.org/2000/svg" width="45" height="45" viewBox="0 0 100 100">
        <path d="M50 10 Q80 50 50 90 Q20 50 50 10 Z" stroke="#9D74C6" stroke-width="4" fill="none" />
    </svg>

    <svg class="animated-shape shape15" xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 100 100">
        <circle cx="50" cy="50" r="40" stroke="#F7E6A0" stroke-width="4" fill="none" />
        <line x1="50" y1="50" x2="50" y2="10" stroke="#F7E6A0" stroke-width="4" />
    </svg>

    <svg class="animated-shape shape16" xmlns="http://www.w3.org/2000/svg" width="45" height="45" viewBox="0 0 100 100">
        <path d="M50,10 L90,50 L50,90 L10,50 Z" stroke="#A7D8B6" stroke-width="4" fill="none" />
    </svg>

    <svg class="animated-shape shape17" xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 100 100">
        <path d="M50,10 Q70 30 50 50 Q30 30 50 10 Z" stroke="#64A6A6" stroke-width="4" fill="none" />
    </svg>
</div>

<style>
    /* SVG Container */
    .svg-decorations {
        position: fixed;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        z-index: 9999; /* High z-index for priority display */
        pointer-events: none; /* Allows interaction with elements beneath */
        overflow: hidden;
    }

    /* SVG Base Style */
    .animated-shape {
        position: absolute;
        animation: float 8s infinite ease-in-out;
        opacity: 0.9; /* Bright appearance */
    }

    /* Individual Shape Positions */
    .shape1 { top: 5%; left: 10%; }
    .shape2 { bottom: 10%; right: 15%; }
    .shape3 { top: 50%; left: 70%; transform: translate(-50%, -50%); }
    .shape4 { bottom: 20%; left: 5%; }
    .shape5 { top: 20%; right: 30%; }
    .shape6 { bottom: 40%; left: 50%; transform: translateX(-50%); }
    .shape7 { top: 10%; right: 5%; }
    .shape8 { bottom: 5%; right: 5%; }
    .shape9 { top: 15%; left: 40%; }
    .shape10 { bottom: 10%; left: 60%; }
    .shape11 { top: 35%; left: 45%; transform: translate(-50%, -50%); }
    .shape12 { bottom: 30%; left: 10%; }
    .shape13 { top: 25%; left: 60%; }
    .shape14 { top: 70%; left: 25%; }
    .shape15 { top: 70%; left: 70%; }
    .shape16 { top: 50%; left: 15%; }
    .shape17 { bottom: 20%; left: 80%; }

    /* Animation */
    @keyframes float {
        0% { transform: translateY(0); }
        50% { transform: translateY(-10px); }
        100% { transform: translateY(0); }
    }
</style>
