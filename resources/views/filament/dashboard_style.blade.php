<style>
/* Dashboard Aesthetic Reset */

/* =======================================
   DARK MODE (Glassmorphism + Neon Glow)
   ======================================= */
html.dark, html.dark body, html.dark body.fi-body {
    background-color: #020412 !important;
    background-image:
        radial-gradient(circle at 15% 15%, rgba(247, 173, 18, 0.06) 0%, transparent 35%),
        radial-gradient(circle at 85% 85%, rgba(113, 162, 207, 0.08) 0%, transparent 35%) !important;
    background-attachment: fixed;
}

/* Cards, Tables & Forms Glassmorphism */
html.dark .fi-wi,
html.dark .fi-ta-ctn,
html.dark .fi-fo-ctn,
html.dark .bg-white,
html.dark .bg-gray-900,
html.dark main section {
    background-color: rgba(16, 21, 36, 0.8) !important;
    backdrop-filter: blur(24px) !important;
    -webkit-backdrop-filter: blur(24px) !important;
    border: 1px solid rgba(255, 255, 255, 0.1) !important;
    box-shadow: 0 10px 30px -10px rgba(0, 0, 0, 0.5) !important;
    border-radius: 1.25rem !important;
    color: #ffffff !important;
}

/* -------------------------------------------------------------------------
   FORCE SIDEBAR & TOPBAR OVERRIDES (Must be placed after global .bg-white)
   ------------------------------------------------------------------------- */

/* Sidebar Navigation Base - Unified soft glass */
html.dark .fi-sidebar, html.dark aside.fi-sidebar, html.dark .fi-sidebar nav {
    background-color: rgba(6, 10, 26, 0.7) !important;
    background-image: none !important;
    backdrop-filter: blur(24px) !important;
    -webkit-backdrop-filter: blur(24px) !important;
    border-right: 1px solid rgba(255, 255, 255, 0.05) !important;
    box-shadow: none !important;
}

/* Sidebar Header where logo is located */
html.dark .fi-sidebar-header, html.dark aside .fi-sidebar-header {
    background-color: transparent !important;
    background-image: none !important;
    border-bottom: 1px solid rgba(255, 255, 255, 0.05) !important;
}

/* Topbar Navigation - Gradient Biru Hitam Kuning */
html.dark .fi-topbar {
    background-color: transparent !important;
    background-image: linear-gradient(90deg, rgba(18, 59, 122, 0.8) 0%, rgba(0, 0, 0, 1) 25%, rgba(0, 0, 0, 1) 75%, rgba(247, 173, 18, 0.8) 100%) !important;
    backdrop-filter: blur(24px) !important;
    -webkit-backdrop-filter: blur(24px) !important;
    border-bottom: 1px solid rgba(255, 255, 255, 0.05) !important;
    box-shadow: 0 4px 30px rgba(0, 0, 0, 0.3) !important;
}

/* Strip white backgrounds from inner wrappers of the Topbar */
html.dark .fi-topbar > div,
html.dark .fi-topbar > div > div,
html.dark .fi-topbar > nav,
html.dark .fi-logo {
    background-color: transparent !important;
    background-image: none !important;
}

/* -------------------------------------------------------------------------
   UTILITIES
   ------------------------------------------------------------------------- */

/* Remove default rings */
html.dark .ring-1, html.dark .ring-gray-900\/5, html.dark .ring-white\/10 {
    --tw-ring-color: transparent !important;
    box-shadow: none !important;
}

/* Force headings and text to be white inside dark mode cards */
.dark .bg-white h1,
.dark .bg-white h2,
.dark .bg-white h3,
.dark .bg-white span,
.dark .bg-white p,
.dark .fi-wi * {
    color: inherit;
}
.dark .text-gray-950 {
    color: #ffffff !important;
}
.dark .text-gray-500 {
    color: #9ca3af !important;
}

/* Subtle glow on specific primary buttons */
.dark .fi-btn-primary,
.dark .fi-page-header-actions button {
    box-shadow: 0 4px 15px rgba(247, 173, 18, 0.2) !important;
    transition: all 0.2s ease-in-out !important;
}
.dark .fi-btn-primary:hover,
.dark .fi-page-header-actions button:hover {
    box-shadow: 0 6px 20px rgba(247, 173, 18, 0.3) !important;
    transform: translateY(-1px) !important;
}

/* Table refinement */
.dark table { background: transparent !important; }
.dark th { background: rgba(255, 255, 255, 0.02) !important; }
.dark tr:hover { background: rgba(255, 255, 255, 0.04) !important; }
.dark td { border-color: rgba(255, 255, 255, 0.03) !important; }


/* =======================================
   LIGHT MODE (Clean, Soft & Minimal)
   ======================================= */
body:not(.dark) {
    background-color: #f7f9fa !important;
}

/* Sidebar & Topbar Soft */
body:not(.dark) .fi-sidebar {
    background: #ffffff !important;
    border-right: 1px solid rgba(0, 0, 0, 0.05) !important;
    box-shadow: 2px 0 15px rgba(0,0,0,0.03) !important;
}

/* Sidebar header area (logo) when in Sidebar layout */
body:not(.dark) .fi-sidebar-header {
    background: linear-gradient(90deg, rgba(247, 175, 18, 0.15) 0%, #ffffff 100%) !important;
    border-bottom: 0 !important;
}

/* Topbar Gradient (Kuning, Putih Dominan, Biru Lembut) */
body:not(.dark) nav.fi-topbar {
    background: none !important;
    background-color: transparent !important;
    background-image: linear-gradient(90deg,  rgba(18, 59, 122, 0.8) 0%, rgba(255, 255, 255, 0) 25%, rgba(255, 255, 255, 0) 75%, rgba(247, 173, 18, 0.8) 100%) !important;
    border-bottom: 1px solid rgba(103, 103, 103, 0.138) !important;
    box-shadow: 0 4px 15px rgba(0,0,0,0.02) !important;
}

/* Force strip light-mode native white wrappers in topbar to allow gradient to show */
body:not(.dark) nav.fi-topbar > div,
body:not(.dark) nav.fi-topbar > div > div,
body:not(.dark) .fi-logo {
    background-color: transparent !important;
    background-image: none !important;
}

/* Cards & Widgets Soft Shadows */
body:not(.dark) .fi-wi,
body:not(.dark) .fi-ta-ctn,
body:not(.dark) .fi-fo-ctn,
body:not(.dark) .bg-white {
    border: 1px solid rgba(0, 0, 0, 0.02) !important;
    box-shadow: 0 10px 30px -5px rgba(0, 0, 0, 0.03), 0 4px 6px -4px rgba(0, 0, 0, 0.02) !important;
    border-radius: 1.25rem !important;
}

/* Soft button hover */
body:not(.dark) .fi-btn-primary {
    box-shadow: 0 4px 12px rgba(247, 173, 18, 0.3) !important;
    transition: all 0.2s ease-in-out !important;
}
body:not(.dark) .fi-btn-primary:hover {
    box-shadow: 0 6px 16px rgba(247, 173, 18, 0.4) !important;
    transform: translateY(-1px) !important;
}
</style>
