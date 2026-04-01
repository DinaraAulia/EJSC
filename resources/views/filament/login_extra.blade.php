<style>
    /* 1. Global Background override for Login Page */
    body:has(.fi-simple-layout), .fi-simple-layout, .fi-simple-main {
        background: radial-gradient(circle at 10% 0%, rgba(247, 173, 18, 0.15) 0%, transparent 40%),
                    radial-gradient(circle at 90% 100%, rgba(113, 162, 207, 0.15) 0%, transparent 40%),
                    #020412 !important;
        background-color: #020412 !important;
        background-attachment: fixed;
    }

    /* 2. Override all Filament white cards and specific tailwind tags */
    .fi-simple-main .bg-white,
    .fi-simple-main .dark\:bg-white\/5,
    .fi-simple-main .dark\:bg-gray-900,
    .fi-simple-main section {
        background-color: rgba(10, 15, 30, 0.7) !important;
        backdrop-filter: blur(24px) !important;
        -webkit-backdrop-filter: blur(24px) !important;
        border-radius: 1.5rem !important;
        border: 1px solid rgba(255,255,255,0.1) !important;
        box-shadow: 0 30px 60px rgba(0,0,0,0.5) !important;
    }

    /* Override Rings/Shadows from tailwind */
    .fi-simple-main .ring-1, 
    .fi-simple-main .ring-white\/10 {
        --tw-ring-color: transparent !important;
        --tw-ring-shadow: none !important;
        box-shadow: none !important;
    }

    /* 3. Typography Overrides (Force white/light text instead of black text) */
    .fi-simple-main .text-gray-950,
    .fi-simple-main h1,
    .fi-simple-main label,
    .fi-simple-main span {
        color: #ffffff !important;
    }
    
    .fi-simple-main .text-gray-500,
    .fi-simple-main p {
        color: #9ca3af !important;
    }

    /* 4. Form Inputs */
    .fi-simple-main input.fi-input,
    .fi-simple-main .fi-input-wrapper {
        background-color: #ffffff !important; /* Kotak isian putih */
        border-color: rgba(255, 255, 255, 0.3) !important;
        color: #000000 !important; /* Teks saat diketik jadi hitam */
    }
    
    .fi-simple-main .fi-input-wrapper:focus-within {
        border-color: #F7AD12 !important;
        --tw-ring-color: rgba(247, 173, 18, 0.8) !important;
        --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(2px + var(--tw-ring-offset-width)) var(--tw-ring-color) !important;
        box-shadow: var(--tw-ring-shadow) !important;
    }

    /* 5. Button */
    .fi-simple-main button[type="submit"] {
        background: linear-gradient(135deg, #F7AD12, #E3733D) !important;
        border: none !important;
        color: #01031C !important;
    }
    .fi-simple-main button[type="submit"] span {
        color: #01031C !important;
        font-weight: 800 !important;
    }
    
    /* 6. Hide default external logo on login page with absolute certainty */
    .fi-logo, .fi-simple-main .fi-logo, .fi-simple-header {
        display: none !important;
    }

    /* Custom Greeting Text */
    .custom-greeting {
        text-align: center;
        margin-bottom: 2rem;
        padding-bottom: 1.5rem;
        border-bottom: 1px solid rgba(255,255,255,0.05);
        position: relative;
    }
    .custom-greeting-glow {
        position: absolute;
        top: 30%; left: 50%;
        transform: translate(-50%, -50%);
        width: 10rem; height: 10rem;
        background: rgba(247, 173, 18, 0.15);
        border-radius: 50%;
        filter: blur(40px);
        pointer-events: none;
    }
    .custom-greeting img {
        height: 3.5rem;
        margin: 0 auto;
        position: relative;
        z-index: 10;
        object-fit: contain;
    }
    .custom-greeting p {
        color: #9ca3af !important;
        font-size: 0.70rem;
        font-weight: 700;
        letter-spacing: 0.15em;
        text-transform: uppercase;
        margin-top: 1rem;
        margin-bottom: 0;
        position: relative;
        z-index: 10;
    }
</style>

<div class="custom-greeting">
    <div class="custom-greeting-glow"></div>
    <img src="{{ asset('images/LogoEJSC.png') }}" alt="EJSC Logo">
    <p>EJSC Admin Portal</p>
</div>
