<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="theme-color" content="#0b0e0c" />
  <meta name="description" content="Dany Wiratama - Safety Health Environment (HSE) Staff. Ahli K3 Umum (Kemnaker & BNSP), POPU, OPLB3, Damkar D, TKBT 2, Confined Space. Pengalaman industri di PT Fuji Seat Indonesia & PT Pionir Tekno Gemilang." />
  <meta property="og:title" content="DANY WIRATAMA | Safety Health Environment Staff Portfolio" />
  <meta property="og:description" content="Portfolio & CV Interaktif Dany Wiratama - Safety Health Environment Staff dengan Swarm Rebuild Engine." />
  <title>DANY | Safety Health Environment (HSE) Staff Portfolio</title>

  <link rel="icon" href="assets/images/favicon.svg" type="image/svg+xml" />
  <link rel="preload" href="assets/images/dany-portrait.png" as="image" fetchpriority="high" />

  <!-- Google Fonts: Anton (Display), Caveat (Handwriting), Manrope (Technical Sans) -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Anton&family=Caveat:wght@400;600&family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet" />

  <!-- Custom Stylesheet -->
  <link rel="stylesheet" href="assets/css/style.css" />
</head>
<body class="is-blank-slate">

  <!-- ==========================================================================
       REAL 41-SECOND SOUNDTRACK (AUTOPLAY NATIVE)
       ========================================================================== -->
  <audio id="swarmAudioTrack" src="assets/audio/soundtrack.mp3" autoplay preload="auto" playsinline></audio>

  <!-- ==========================================================================
       SWARM REBUILD ENGINE (OVERLAY & 5 AUTONOMOUS CURSORS)
       ========================================================================== -->
  <div class="swarm-overlay" id="swarmOverlay">
    <!-- Cursor 1: Safety Orange (HSE Lead) -->
    <div class="swarm-cursor" id="swarmCursor1" style="--c-color: #ff6b1a;">
      <svg viewBox="0 0 24 24" class="cursor-pointer">
        <path d="M4 2l16 11-7.5 1.5 4 8-3 1.5-4-8-5.5 5.5z" fill="#ff6b1a" stroke="#ffffff" stroke-width="1.3"/>
      </svg>
      <span class="cursor-badge">ALPHA // HSE LEAD</span>
    </div>

    <!-- Cursor 2: Bio Green (Eco Compliance) -->
    <div class="swarm-cursor" id="swarmCursor2" style="--c-color: #10b981;">
      <svg viewBox="0 0 24 24" class="cursor-pointer">
        <path d="M4 2l16 11-7.5 1.5 4 8-3 1.5-4-8-5.5 5.5z" fill="#10b981" stroke="#ffffff" stroke-width="1.3"/>
      </svg>
      <span class="cursor-badge">BETA // ECO COMPLIANCE</span>
    </div>

    <!-- Cursor 3: Caution Yellow (Hazard Scout) -->
    <div class="swarm-cursor" id="swarmCursor3" style="--c-color: #facc15;">
      <svg viewBox="0 0 24 24" class="cursor-pointer">
        <path d="M4 2l16 11-7.5 1.5 4 8-3 1.5-4-8-5.5 5.5z" fill="#facc15" stroke="#ffffff" stroke-width="1.3"/>
      </svg>
      <span class="cursor-badge">GAMMA // HAZARD SCOUT</span>
    </div>

    <!-- Cursor 4: Industrial Cyan (Fire & Tech) -->
    <div class="swarm-cursor" id="swarmCursor4" style="--c-color: #06b6d4;">
      <svg viewBox="0 0 24 24" class="cursor-pointer">
        <path d="M4 2l16 11-7.5 1.5 4 8-3 1.5-4-8-5.5 5.5z" fill="#06b6d4" stroke="#ffffff" stroke-width="1.3"/>
      </svg>
      <span class="cursor-badge">DELTA // FIRE & TECH</span>
    </div>

    <!-- Cursor 5: Steel Violet (Audit Coordinator) -->
    <div class="swarm-cursor" id="swarmCursor5" style="--c-color: #a855f7;">
      <svg viewBox="0 0 24 24" class="cursor-pointer">
        <path d="M4 2l16 11-7.5 1.5 4 8-3 1.5-4-8-5.5 5.5z" fill="#a855f7" stroke="#ffffff" stroke-width="1.3"/>
      </svg>
      <span class="cursor-badge">EPSILON // AUDIT COORD</span>
    </div>
  </div>

  <!-- Swarm Status HUD Pill -->
  <div class="swarm-hud" id="swarmHud">
    <span class="swarm-hud-indicator"></span>
    <span id="swarmHudText">SWARM REBUILD ACTIVE // 5 AGENTS DEPLOYED</span>
  </div>

  <!-- ==========================================================================
       SITE HEADER / NAVBAR
       ========================================================================== -->
  <header class="site-header">
    <div class="container header-inner">
      <a href="#home" class="site-logo swarm-node">
        <span class="logo-text">DANY</span><span class="dot">.</span>
        <span class="logo-badge">HSE OFFICER</span>
      </a>

      <nav>
        <ul class="desktop-nav swarm-node">
          <li><a href="#home" class="active">Home</a></li>
          <li><a href="#portfolio">Works</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#experience">Journey</a></li>
          <li><a href="#certifications">Certifications</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </nav>

      <div class="header-actions swarm-node">
        <!-- Instant Build Button (Unveil immediately without resetting audio) -->
        <button class="instant-build-btn" id="instantBuildBtn" title="Selesaikan perakitan secara instan tanpa menghentikan musik">
          <span>⏩</span>
          <span>SELESAIKAN BUILD</span>
        </button>

        <!-- Swarm Rebuild Action Button -->
        <button class="swarm-rebuild-btn" id="swarmRebuildBtn" title="Rebuild Website with Multi-Agent Swarm">
          <span class="swarm-icon">⚡</span>
          <span>SWARM REBUILD</span>
        </button>

        <!-- Audio Synthesizer Toggle -->
        <button class="sound-toggle is-active" id="soundToggle" title="Toggle UI Audio Feedback" aria-label="Toggle UI Audio Feedback">
          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <polygon points="11 5 6 9 2 9 2 15 6 15 11 19 11 5"></polygon>
            <path d="M15.54 8.46a5 5 0 0 1 0 7.07"></path>
            <path d="M19.07 4.93a10 10 0 0 1 0 14.14"></path>
          </svg>
        </button>

        <!-- Download CV PDF Button -->
        <a href="assets/cv-dany-wiratama.pdf" download class="cv-download-btn" title="Download Official CV Dany Wiratama">
          <span>DOWNLOAD CV (PDF)</span>
          <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
            <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
            <polyline points="7 10 12 15 17 10"></polyline>
            <line x1="12" y1="15" x2="12" y2="3"></line>
          </svg>
        </a>

        <!-- Mobile Menu Toggle Button -->
        <button class="mobile-toggle" id="mobileToggle" aria-label="Toggle Mobile Menu">
          <span></span>
          <span></span>
          <span></span>
        </button>
      </div>
    </div>
  </header>

  <!-- Mobile Drawer Menu -->
  <div class="mobile-drawer" id="mobileDrawer">
    <ul class="mobile-nav-list">
      <li><a href="#home">Home</a></li>
      <li><a href="#portfolio">Works</a></li>
      <li><a href="#about">About</a></li>
      <li><a href="#experience">Journey</a></li>
      <li><a href="#certifications">Certifications</a></li>
      <li><a href="#contact">Contact</a></li>
    </ul>

    <div class="mobile-drawer-actions">
      <a href="assets/cv-dany-wiratama.pdf" download class="cv-download-btn" style="justify-content: center; padding: 12px;">
        <span>DOWNLOAD CV (PDF)</span>
      </a>
      <button class="btn-secondary" onclick="document.getElementById('swarmRebuildBtn').click()" style="justify-content: center; padding: 12px;">
        <span>⚡ SWARM REBUILD</span>
      </button>
    </div>
  </div>

  <!-- ==========================================================================
       HERO SECTION: INDUSTRIAL HSE AESTHETIC
       ========================================================================== -->
  <section class="hero" id="home">
    <!-- Giant Background Watermark -->
    <div class="hero-watermark swarm-node">SAFETY FIRST</div>

    <div class="container">
      <!-- Status Top Pill & Spec -->
      <div class="hero-top swarm-node">
        <div class="availability-pill">
          <span class="pulse-dot"></span>
          <span>AVAILABLE FOR HSE Staff</span>
        </div>
        <div class="hero-spec-tag">
          <span>📍 Karawang, West Java, Indonesia</span>
          <span class="badge-sec">AHLI K3 UMUM (KEMNAKER & BNSP)</span>
        </div>
      </div>

      <!-- Main Hero Grid -->
      <div class="hero-grid">
        <!-- Left: Portrait Cutout with Safety Glow Aura -->
        <div class="hero-portrait-wrapper swarm-node">
          <div class="portrait-aura"></div>
          <div class="portrait-box">
            <div class="portrait-img-inner">
              <img src="assets/images/dany-portrait.png" alt="Dany Wiratama - Safety Health Environment Staff" class="portrait-img" />
              <div class="portrait-hud-tag">
                <span>HSE SPECIALIST</span>
                <strong>ZERO ACCIDENT CULTURE</strong>
              </div>
            </div>
          </div>
        </div>

        <!-- Right: Industrial Typography & Profile Details -->
        <div class="hero-intro swarm-node">
          <span class="greeting-accent">Hello, I'm</span>
          <h1><span class="name-display">DANY</span><span class="accent-dot">.</span></h1>
          <div class="hero-fullname">Dany Wiratama</div>
          <div class="hero-role-badge">
            <span class="hazard-bullet">▲</span>
            <span>SAFETY HEALTH ENVIRONMENT STAFF</span>
          </div>

          <p class="hero-bio">
            My last work experience as <strong>HSE</strong>, I have a certification of <strong>General Occupational Safety and Health Expert</strong>. My work interests are in the field of <strong>safety, quality and production</strong>.
          </p>

          <!-- 4 Core Metrics -->
          <div class="hero-stats swarm-node">
            <div class="stat-item">
              <span class="stat-num">6<span class="accent">+</span></span>
              <span class="stat-label">Years Industrial Experience</span>
            </div>
            <div class="stat-item">
              <span class="stat-num">7<span class="green">✓</span></span>
              <span class="stat-label">National K3 & BNSP Licenses</span>
            </div>
            <div class="stat-item">
              <span class="stat-num">0<span class="green">!</span></span>
              <span class="stat-label">Zero Accident Focus</span>
            </div>
            <div class="stat-item">
              <span class="stat-num">1,000<span class="accent">+</span></span>
              <span class="stat-label">Workers Trained & Inducted</span>
            </div>
          </div>

          <!-- Engineering & HSE Philosophy Manifesto -->
          <div class="hero-manifesto swarm-node">
            <p>
              "Safety is not merely a set of compliance rules; it is an uncompromising industrial discipline and collective culture. Protecting lives, preserving the environment, and elevating production quality."
            </p>
          </div>

          <!-- Hero Bottom CTA Buttons -->
          <div class="hero-bottom-actions swarm-node">
            <a href="#portfolio" class="btn-primary">
              <span>JELAJAHI WORKS ↓</span>
            </a>
            <button class="btn-secondary" id="heroSwarmTrigger">
              <span>⚡ SWARM REBUILD ENGINE</span>
            </button>
            <a href="https://wa.me/6282217027098" target="_blank" rel="noopener noreferrer" class="btn-secondary">
              <span>💬 WHATSAPP DIRECT</span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ==========================================================================
       TECH STACK / BRAND TICKER (INFINITE SCROLLING MARQUEE)
       ========================================================================== -->
  <div class="brand-ticker-section swarm-node" id="brand-ticker">
    <div class="ticker-track">
      <div class="ticker-item"><span class="hazard-icon">⚠</span> HIRADC & JSA MATRIX</div>
      <div class="ticker-item"><span class="green-icon">✦</span> K3L SOPS & REGULATORY COMPLIANCE</div>
      <div class="ticker-item"><span class="hazard-icon">⚠</span> P2K3L GOVERNANCE</div>
      <div class="ticker-item"><span class="green-icon">✦</span> UKL-UPL & SIMPEL KLHK</div>
      <div class="ticker-item"><span class="hazard-icon">⚠</span> FIRE DRILL & DAMKAR D</div>
      <div class="ticker-item"><span class="green-icon">✦</span> HAZARDOUS WASTE (OPLB3 BNSP)</div>
      <div class="ticker-item"><span class="hazard-icon">⚠</span> AIR EMISSION (POPU BNSP)</div>
      <div class="ticker-item"><span class="green-icon">✦</span> CONFINED SPACE ENTRY</div>
      <div class="ticker-item"><span class="hazard-icon">⚠</span> WORKING AT HEIGHTS (TKBT 2)</div>
      <div class="ticker-item"><span class="green-icon">✦</span> MACHINE SAFETY & STOP 6</div>
      <div class="ticker-item"><span class="hazard-icon">⚠</span> ACCIDENT INVESTIGATION (5-WHY)</div>
      <div class="ticker-item"><span class="green-icon">✦</span> KIKEN YOCHI & HITOTEMA PROGRAM</div>
      <div class="ticker-item"><span class="hazard-icon">⚠</span> SAP (EZRUNNER) ERP</div>
      <div class="ticker-item"><span class="green-icon">✦</span> MICROSOFT OFFICE SAFETY SUITE</div>
      <div class="ticker-item"><span class="hazard-icon">⚠</span> GRAPHIC SAFETY (COREL & CANVA)</div>

      <!-- Duplicate for infinite seamless scroll -->
      <div class="ticker-item"><span class="hazard-icon">⚠</span> HIRADC & JSA MATRIX</div>
      <div class="ticker-item"><span class="green-icon">✦</span> K3L SOPS & REGULATORY COMPLIANCE</div>
      <div class="ticker-item"><span class="hazard-icon">⚠</span> P2K3L GOVERNANCE</div>
      <div class="ticker-item"><span class="green-icon">✦</span> UKL-UPL & SIMPEL KLHK</div>
      <div class="ticker-item"><span class="hazard-icon">⚠</span> FIRE DRILL & DAMKAR D</div>
      <div class="ticker-item"><span class="green-icon">✦</span> HAZARDOUS WASTE (OPLB3 BNSP)</div>
      <div class="ticker-item"><span class="hazard-icon">⚠</span> AIR EMISSION (POPU BNSP)</div>
      <div class="ticker-item"><span class="green-icon">✦</span> CONFINED SPACE ENTRY</div>
      <div class="ticker-item"><span class="hazard-icon">⚠</span> WORKING AT HEIGHTS (TKBT 2)</div>
      <div class="ticker-item"><span class="green-icon">✦</span> MACHINE SAFETY & STOP 6</div>
      <div class="ticker-item"><span class="hazard-icon">⚠</span> ACCIDENT INVESTIGATION (5-WHY)</div>
      <div class="ticker-item"><span class="green-icon">✦</span> KIKEN YOCHI & HITOTEMA PROGRAM</div>
      <div class="ticker-item"><span class="hazard-icon">⚠</span> SAP (EZRUNNER) ERP</div>
      <div class="ticker-item"><span class="green-icon">✦</span> MICROSOFT OFFICE SAFETY SUITE</div>
      <div class="ticker-item"><span class="hazard-icon">⚠</span> GRAPHIC SAFETY (COREL & CANVA)</div>
    </div>
  </div>

  <!-- ==========================================================================
       SELECTED WORKS (8 HSE PROYEK UNGGULAN)
       ========================================================================== -->
  <section id="portfolio">
    <div class="container">
      <div class="section-header swarm-node">
        <span class="section-label">HSE FLAGSHIP PROJECTS</span>
        <h2 class="section-title">ENTERPRISE SAFETY & ENVIRONMENT IMPLEMENTATIONS</h2>
        <p class="section-subtitle">
          Portofolio proyek nyata dalam rekayasa sistem keselamatan kerja, pengujian kelayakan mesin, manajemen tanggap darurat, dan kepatuhan lingkungan hidup.
        </p>

        <!-- Filter Tabs -->
        <div class="portfolio-filters">
          <button class="filter-btn active" data-filter="all">All (8)</button>
          <button class="filter-btn" data-filter="Safety Culture & Behavior">Safety Culture (2)</button>
          <button class="filter-btn" data-filter="High-Risk Operations">High-Risk & Fire (3)</button>
          <button class="filter-btn" data-filter="Environmental & Compliance">Environment & Compliance (3)</button>
        </div>
      </div>

      <!-- 8 Projects Grid -->
      <div class="projects-grid">
        <!-- Project 1 -->
        <div class="project-card swarm-node" data-project="safety-talk" data-category="Safety Culture & Behavior">
          <div class="project-card-image">
            <img src="assets/images/projects/project-safety-talk.svg" alt="Daily Safety Morning Talk Revamp & STOP 6 Culture" loading="lazy" />
            <span class="project-cat-badge">Safety Culture</span>
            <span class="project-num-badge">01</span>
          </div>
          <div class="project-card-body">
            <h3 class="project-card-title">Daily Safety Morning Talk Revamp & STOP 6 Culture</h3>
            <p class="project-card-summary">
              Restrukturisasi agenda safety talk harian (07:30) mengintegrasikan klasifikasi 6 bahaya STOP 6 manufaktur dan pelatihan reflek Kiken Yochi (KYT).
            </p>
            <div class="project-tags">
              <span class="tag-pill">Safety Talk</span>
              <span class="tag-pill">STOP 6</span>
              <span class="tag-pill">KYT Training</span>
              <span class="tag-pill">Behavior Safety</span>
            </div>
            <div class="project-card-footer">
              <span>BLUEPRINT DETAILS</span>
              <span class="arrow">→</span>
            </div>
          </div>
        </div>

        <!-- Project 2 -->
        <div class="project-card swarm-node" data-project="machine-safety" data-category="High-Risk Operations">
          <div class="project-card-image">
            <img src="assets/images/projects/project-machine-safety.svg" alt="Machine Guarding & Safety Device Interlock Feasibility" loading="lazy" />
            <span class="project-cat-badge">Equipment Safety</span>
            <span class="project-num-badge">02</span>
          </div>
          <div class="project-card-body">
            <h3 class="project-card-title">Machine Guarding & Safety Device Interlock Feasibility</h3>
            <p class="project-card-summary">
              Inspeksi kelayakan operasional safety device mesin press, tirai optik (light curtain), dan sirkuit interlock E-Stop untuk sertifikasi legal Disnaker.
            </p>
            <div class="project-tags">
              <span class="tag-pill">Interlock Sensors</span>
              <span class="tag-pill">Light Curtains</span>
              <span class="tag-pill">Disnaker Feasibility</span>
              <span class="tag-pill">SOP K3L</span>
            </div>
            <div class="project-card-footer">
              <span>BLUEPRINT DETAILS</span>
              <span class="arrow">→</span>
            </div>
          </div>
        </div>

        <!-- Project 3 -->
        <div class="project-card swarm-node" data-project="fire-hydrant" data-category="High-Risk Operations">
          <div class="project-card-image">
            <img src="assets/images/projects/project-fire-hydrant.svg" alt="Emergency Fire Preparedness & APAR Fleet Governance" loading="lazy" />
            <span class="project-cat-badge">Fire Response</span>
            <span class="project-num-badge">03</span>
          </div>
          <div class="project-card-body">
            <h3 class="project-card-title">Emergency Fire Preparedness & APAR Fleet Governance</h3>
            <p class="project-card-summary">
              Manajemen 140+ unit APAR powder & CO2 berbarcode, pengujian tekanan statis hidran (7.2 Bar), dan komando simulasi evakuasi kebakaran tahunan 800+ staf.
            </p>
            <div class="project-tags">
              <span class="tag-pill">Damkar D License</span>
              <span class="tag-pill">APAR Barcode</span>
              <span class="tag-pill">Hydrant 7.2 Bar</span>
              <span class="tag-pill">Evacuation Drill</span>
            </div>
            <div class="project-card-footer">
              <span>BLUEPRINT DETAILS</span>
              <span class="arrow">→</span>
            </div>
          </div>
        </div>

        <!-- Project 4 -->
        <div class="project-card swarm-node" data-project="environmental-klhk" data-category="Environmental & Compliance">
          <div class="project-card-image">
            <img src="assets/images/projects/project-environmental-klhk.svg" alt="Industrial Environmental Compliance & SIMPEL KLHK" loading="lazy" />
            <span class="project-cat-badge">Environmental</span>
            <span class="project-num-badge">04</span>
          </div>
          <div class="project-card-body">
            <h3 class="project-card-title">Industrial Environmental Compliance & SIMPEL KLHK</h3>
            <p class="project-card-summary">
              Penyusunan dokumen UKL-UPL, pelaporan digital portal SIMPEL KLHK, manifes limbah B3 (OPLB3) via FESTRONIK, dan pemantauan cerobong emisi (POPU).
            </p>
            <div class="project-tags">
              <span class="tag-pill">SIMPEL KLHK</span>
              <span class="tag-pill">UKL-UPL</span>
              <span class="tag-pill">OPLB3 B3 Waste</span>
              <span class="tag-pill">POPU Air Emission</span>
            </div>
            <div class="project-card-footer">
              <span>BLUEPRINT DETAILS</span>
              <span class="arrow">→</span>
            </div>
          </div>
        </div>

        <!-- Project 5 -->
        <div class="project-card swarm-node" data-project="high-risk-tkbt" data-category="High-Risk Operations">
          <div class="project-card-image">
            <img src="assets/images/projects/project-high-risk-tkbt.svg" alt="High-Risk Confined Space & Working at Heights (TKBT 2)" loading="lazy" />
            <span class="project-cat-badge">High Risk Ops</span>
            <span class="project-num-badge">05</span>
          </div>
          <div class="project-card-body">
            <h3 class="project-card-title">High-Risk Confined Space & Working at Heights (TKBT 2)</h3>
            <p class="project-card-summary">
              Protokol Izin Kerja (Permit-to-Work) tangki terbatas dan perancah ketinggian: uji atmosfer 4-gas (O2, LEL, CO, H2S) dan verifikasi full body harness.
            </p>
            <div class="project-tags">
              <span class="tag-pill">TKBT Tingkat 2</span>
              <span class="tag-pill">Confined Space</span>
              <span class="tag-pill">Permit-To-Work</span>
              <span class="tag-pill">4-Gas Detector</span>
            </div>
            <div class="project-card-footer">
              <span>BLUEPRINT DETAILS</span>
              <span class="arrow">→</span>
            </div>
          </div>
        </div>

        <!-- Project 6 -->
        <div class="project-card swarm-node" data-project="csms-contractor" data-category="Environmental & Compliance">
          <div class="project-card-image">
            <img src="assets/images/projects/project-csms-contractor.svg" alt="Contractor Safety Management (CSMS) & Forklift Fleet" loading="lazy" />
            <span class="project-cat-badge">Contractor & Fleet</span>
            <span class="project-num-badge">06</span>
          </div>
          <div class="project-card-body">
            <h3 class="project-card-title">Contractor Safety Management (CSMS) & Forklift Fleet</h3>
            <p class="project-card-summary">
              Sistem seleksi dan induksi kontraktor pihak ketiga (CSMS), inspeksi harian armada forklift & logistik, penegakan lisensi SIO, dan lampu blue spot visual.
            </p>
            <div class="project-tags">
              <span class="tag-pill">CSMS System</span>
              <span class="tag-pill">Forklift SIO</span>
              <span class="tag-pill">Vehicle Inspection</span>
              <span class="tag-pill">Pedestrian Blue Spot</span>
            </div>
            <div class="project-card-footer">
              <span>BLUEPRINT DETAILS</span>
              <span class="arrow">→</span>
            </div>
          </div>
        </div>

        <!-- Project 7 -->
        <div class="project-card swarm-node" data-project="safety-academy" data-category="Safety Culture & Behavior">
          <div class="project-card-image">
            <img src="assets/images/projects/project-safety-academy.svg" alt="New Employee Safety Onboarding & KYT Simulator" loading="lazy" />
            <span class="project-cat-badge">Training & Academy</span>
            <span class="project-num-badge">07</span>
          </div>
          <div class="project-card-body">
            <h3 class="project-card-title">New Employee Safety Onboarding & KYT Simulator</h3>
            <p class="project-card-summary">
              Kurikulum 4 modul pelatihan karyawan baru: Pengenalan Kebijakan K3L, Praktik Padam Api APAR, Safety Riding berkendara motor, dan Jalur Evakuasi.
            </p>
            <div class="project-tags">
              <span class="tag-pill">Safety Induction</span>
              <span class="tag-pill">Fire Simulator</span>
              <span class="tag-pill">Safety Riding</span>
              <span class="tag-pill">1,000+ Graduated</span>
            </div>
            <div class="project-card-footer">
              <span>BLUEPRINT DETAILS</span>
              <span class="arrow">→</span>
            </div>
          </div>
        </div>

        <!-- Project 8 -->
        <div class="project-card swarm-node" data-project="incident-investigation" data-category="Environmental & Compliance">
          <div class="project-card-image">
            <img src="assets/images/projects/project-incident-investigation.svg" alt="Root Cause Accident Investigation & Hitotema Kaizen" loading="lazy" />
            <span class="project-cat-badge">Investigation & Kaizen</span>
            <span class="project-num-badge">08</span>
          </div>
          <div class="project-card-body">
            <h3 class="project-card-title">Root Cause Accident Investigation & Hitotema Kaizen</h3>
            <p class="project-card-summary">
              Metodologi analisis akar masalah 5-Why & diagram tulang ikan Ishikawa, dipadukan gerakan Kaizen Hitotema untuk pencegahan insiden berulang (0% recurrence).
            </p>
            <div class="project-tags">
              <span class="tag-pill">Accident Investigation</span>
              <span class="tag-pill">5-Why Analysis</span>
              <span class="tag-pill">Ishikawa Fishbone</span>
              <span class="tag-pill">Hitotema Kaizen</span>
            </div>
            <div class="project-card-footer">
              <span>BLUEPRINT DETAILS</span>
              <span class="arrow">→</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ==========================================================================
       ABOUT / STUDIO MATRIX (3 COLUMNS & MANIFESTO)
       ========================================================================== -->
  <section id="about" style="background: #090c0a; border-top: 1px solid var(--line);">
    <div class="container">
      <div class="section-header swarm-node">
        <span class="section-label">STUDIO MATRIX // PROFILE ARCHITECTURE</span>
        <h2 class="section-title">KOMPETENSI, AKADEMIK & FILOSOFI KERJA</h2>
        <p class="section-subtitle">
          Struktur fondasi profesional yang mengombinasikan latar belakang rekayasa energi minyak bumi, penguasaan regulasi K3L nasional, dan eksekusi di lantai pabrik.
        </p>
      </div>

      <!-- Grid 3 Columns -->
      <div class="studio-matrix-grid">
        <!-- Col 1: Latar Belakang Pendidikan -->
        <div class="studio-col swarm-node" style="--col-accent: #ff6b1a;">
          <div class="studio-col-header">
            <div class="studio-col-num">SECTION 01 // FORMAL EDUCATION</div>
            <h3 class="studio-col-title">Latar Belakang Pendidikan</h3>
          </div>
          <ul class="studio-list">
            <li class="studio-item">
              <h4>Akamigas Balongan (Balongan Oil & Gas Academy)</h4>
              <p>Diploma III (D3) Teknik Perminyakan (Petroleum Engineering)</p>
              <span class="meta">Lulus: 2018 • IPK: 3.20 / 4.00</span>
            </li>
            <li class="studio-item">
              <h4>SMA Negeri 3 Karawang</h4>
              <p>Jurusan Ilmu Pengetahuan Alam (IPA)</p>
              <span class="meta">Lulus: 2014 • Karawang, Jawa Barat</span>
            </li>
            <li class="studio-item">
              <h4>Data Demografi Personal</h4>
              <p>Tempat, Tanggal Lahir: Tangerang, 13 Juni 1996</p>
              <span class="meta">Domisili: Telukjambe Timur, Karawang</span>
            </li>
          </ul>
        </div>

        <!-- Col 2: Kompetensi Teknis Utama -->
        <div class="studio-col swarm-node" style="--col-accent: #10b981;">
          <div class="studio-col-header">
            <div class="studio-col-num">SECTION 02 // TECHNICAL LICENSES</div>
            <h3 class="studio-col-title">Kompetensi Teknis Utama</h3>
          </div>
          <ul class="studio-list">
            <li class="studio-item">
              <h4>K3 Industri & Operasional Ketinggian</h4>
              <p>Ahli K3 Umum (Kemnaker & BNSP), Tenaga Kerja Bangunan Tinggi Tingkat 2 (TKBT 2), Damkar D, Confined Space Entry Course.</p>
              <span class="meta">7 Lisensi Nasional & BNSP Aktif</span>
            </li>
            <li class="studio-item">
              <h4>Pengendalian Lingkungan & Limbah</h4>
              <p>POPU (Pengendalian Pencemaran Udara BNSP), OPLB3 (Pengolahan Limbah B3 BNSP), Dokumen UKL-UPL, SIMPEL KLHK.</p>
              <span class="meta">Audit Lingkungan Hidup 100% Compliant</span>
            </li>
            <li class="studio-item">
              <h4>Perangkat Lunak & Sistem ERP</h4>
              <p>ERP SAP (EZRunner), Microsoft Office Suite (Word, Excel, PowerPoint), Desain Grafis (Corel Draw & Canva).</p>
              <span class="meta">Technical Tools Mastery</span>
            </li>
          </ul>
        </div>

        <!-- Col 3: Filosofi Profesional & Soft Skills -->
        <div class="studio-col swarm-node" style="--col-accent: #facc15;">
          <div class="studio-col-header">
            <div class="studio-col-num">SECTION 03 // WORK ETHICS</div>
            <h3 class="studio-col-title">Filosofi & Soft Skills</h3>
          </div>
          <ul class="studio-list">
            <li class="studio-item">
              <h4>Safety First, Quality & Production Follows</h4>
              <p>Keselamatan bukanlah penghambat efisiensi, melainkan prasyarat mutlak untuk menghasilkan produk presisi berkualitas tinggi tanpa cacat kecelakaan.</p>
              <span class="meta">Zero Harm Mindset</span>
            </li>
            <li class="studio-item">
              <h4>Hard Worker & Detail Oriented</h4>
              <p>Memiliki daya tahan kerja lapangan yang tangguh, cermat dalam inspeksi bahaya mikro, dan berorientasi pada ketuntasan penyelesaian SOP.</p>
              <span class="meta">High Rigor & Field Stamina</span>
            </li>
            <li class="studio-item">
              <h4>Communicative & Collaborative Teamwork</h4>
              <p>Mampu menjembatani komunikasi keselamatan antara manajemen direksi, inspektur pemerintah Disnaker/KLHK, vendor kontraktor, hingga operator lini pabrik.</p>
              <span class="meta">Cross-Functional Leadership</span>
            </li>
          </ul>
        </div>
      </div>

      <!-- Banner Manifesto Komitmen Kerja Profesional -->
      <div class="quote-panel swarm-node">
        <blockquote>
          "KESELAMATAN BUKAN SEKADAR ATURAN DI ATAS KERTAS, MELAINKAN <span class="highlight">BUDAYA DAN DISIPLIN NYATA</span> DI SETIAP DETIK OPERASIONAL PABRIK."
        </blockquote>
        <div class="quote-author">// DANY WIRATAMA — SAFETY HEALTH ENVIRONMENT STAFF</div>
      </div>
    </div>
  </section>

  <!-- ==========================================================================
       CAREER JOURNEY & CERTIFICATIONS
       ========================================================================== -->
  <section class="journey-section" id="experience">
    <div class="container">
      <div class="section-header swarm-node">
        <span class="section-label">TRACK RECORD // INDUSTRIAL CAREER</span>
        <h2 class="section-title">RIWAYAT PEKERJAAN & PENGALAMAN HSE</h2>
        <p class="section-subtitle">
          Rekam jejak implementasi keselamatan kerja dan tata kelola lingkungan pada industri manufaktur tier-1 otomotif dan rekayasa teknologi.
        </p>
      </div>

      <!-- Interactive Timeline Accordion -->
      <div class="timeline-accordion">
        <!-- Experience 1: PT Fuji Seat Indonesia -->
        <div class="experience-row is-open swarm-node">
          <div class="experience-header">
            <div class="exp-header-left">
              <span class="exp-period">NOVEMBER 2021 — PRESENT (AKTIF)</span>
              <h3 class="exp-company">PT FUJI SEAT INDONESIA</h3>
              <span class="exp-role">Safety Health Environment (HSE) Staff</span>
            </div>
            <div class="exp-toggle-icon">↓</div>
          </div>
          <div class="experience-body">
            <ul class="exp-responsibilities">
              <li>Carry out safety talk every morning (07:30) with production line teams.</li>
              <li>Monitoring work environment parameters periodically (6 Months cycle).</li>
              <li>Drafting and maintaining UKL-UPL environmental monitoring documents (Manual & Digital).</li>
              <li>Inspecting and testing the feasibility of safety equipment (government operational certificates).</li>
              <li>Making P2K3L documents and statutory reporting to Disnaker.</li>
              <li>Contractor control, safety screening, and hot-work / height permit authorization.</li>
              <li>New employee safety training (Induction, Fire Fighting, Safety Riding, Evacuation).</li>
              <li>Active factory safety patrols and unsafe condition hazard tagging.</li>
              <li>Vehicle, forklift, and material handling logistics inspection.</li>
              <li>Mapping and reconciling national government regulations (Permenaker & KLHK).</li>
              <li>Formulating standard operating procedures (K3L SOPs) across assembly lines.</li>
              <li>Daily safety device verification on stamping, robotic, and assembly machinery.</li>
              <li>Checking and logging factory-wide Fire Extinguishers (APAR & Hydrants).</li>
              <li>Generating comprehensive weekly and monthly HSE key performance indicators.</li>
              <li>Executing annual safety program plans and Safety Small Group Activity (STOP 6).</li>
              <li>Accident investigation, 5-Why root cause analysis, Kiken Yochi & Hitotema Kaizen program.</li>
            </ul>

            <!-- Reference Card -->
            <div class="reference-card">
              <div>
                <strong>REFERENSI RESMI ATASAN:</strong>
                <span>Andhi Komarul Ahmad (SHE Manager — PT Fuji Seat Indonesia)</span>
              </div>
              <a href="tel:+6281383365357" class="ref-call-btn">
                <span>📞 HUBUNGI: +62 813-8336-5357</span>
              </a>
            </div>
          </div>
        </div>

        <!-- Experience 2: PT Pionir Tekno Gemilang -->
        <div class="experience-row swarm-node">
          <div class="experience-header">
            <div class="exp-header-left">
              <span class="exp-period">JULY 2018 — OCTOBER 2021 (3 TAHUN 4 BULAN)</span>
              <h3 class="exp-company">PT PIONIR TEKNO GEMILANG</h3>
              <span class="exp-role">Safety Health Environment (HSE) Staff</span>
            </div>
            <div class="exp-toggle-icon">↓</div>
          </div>
          <div class="experience-body">
            <ul class="exp-responsibilities">
              <li>Assisting the Director to prepare comprehensive project HSE plans and reviewing running site HSE metrics.</li>
              <li>Conducting daily worker safety induction sessions, pre-shift toolbox meetings, and weekly safety committees.</li>
              <li>Delivering hands-on safety training with multidisciplinary project teams, technicians, and sub-contractors.</li>
              <li>Auditing personnel HSE compliance: Medical Check-Up (MCU) validation, PPE standards, and competency training.</li>
              <li>Implementing job safety analysis (JSA) and high-risk Permit-to-Work systems for site installations.</li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Certifications Sub-Section -->
      <div id="certifications" style="padding-top: 20px;">
        <div class="section-header swarm-node">
          <span class="section-label">OFFICIAL CREDENTIALS & LICENSES</span>
          <h2 class="section-title">SERTIFIKASI & LISENSI RESMI K3L</h2>
          <p class="section-subtitle">
            Kredensial lisensi profesi yang diterbitkan oleh Kementerian Ketenagakerjaan RI dan Badan Nasional Sertifikasi Profesi (BNSP). Klik kartu untuk memeriksa detail kompetensi.
          </p>
        </div>

        <!-- 7 Certifications Grid -->
        <div class="certifications-grid">
          <!-- Cert 1 -->
          <div class="cert-card swarm-node" data-cert="ahli-k3u">
            <span class="cert-badge-tag">KEMNAKER RI</span>
            <h3 class="cert-title">AHLI K3 UMUM (AK3U)</h3>
            <p class="cert-issuer">Kementerian Ketenagakerjaan Republik Indonesia</p>
            <div class="cert-reg-number">NO. SERTIFIKAT: SER.18. 19976/AK3/U/VI/2018</div>
          </div>

          <!-- Cert 2 -->
          <div class="cert-card swarm-node" data-cert="ahli-k3-bnsp">
            <span class="cert-badge-tag">BNSP INDONESIA</span>
            <h3 class="cert-title">AHLI K3 (BNSP)</h3>
            <p class="cert-issuer">Badan Nasional Sertifikasi Profesi</p>
            <div class="cert-reg-number">NO. REG: KKK.2334.00139 2024</div>
          </div>

          <!-- Cert 3 -->
          <div class="cert-card swarm-node" data-cert="tkbt-2">
            <span class="cert-badge-tag">KEMNAKER RI</span>
            <h3 class="cert-title">TENAGA KERJA BANGUNAN TINGGI (TKBT 2)</h3>
            <p class="cert-issuer">Kemnaker RI — Bekerja di Ketinggian & Akses Tali</p>
            <div class="cert-reg-number">NO. SERTIFIKAT: SERT. 1496/TKBT-TK2/IV/2019</div>
          </div>

          <!-- Cert 4 -->
          <div class="cert-card swarm-node" data-cert="damkar-d">
            <span class="cert-badge-tag">KEMNAKER RI</span>
            <h3 class="cert-title">PETUGAS PERAN KEBAKARAN (DAMKAR D)</h3>
            <p class="cert-issuer">Kemnaker RI — Tanggap Darurat & Proteksi Api</p>
            <div class="cert-reg-number">NO. REG: NO. 5/0674150824/AS.01.04/VIII/2024</div>
          </div>

          <!-- Cert 5 -->
          <div class="cert-card swarm-node" data-cert="confined-space">
            <span class="cert-badge-tag">TERAKREDITASI</span>
            <h3 class="cert-title">CONFINED SPACE ENTRY COURSE</h3>
            <p class="cert-issuer">Keselamatan Operasi Bekerja di Ruang Terbatas</p>
            <div class="cert-reg-number">NO. SERTIFIKAT: 1628/SKN/III/2019</div>
          </div>

          <!-- Cert 6 -->
          <div class="cert-card swarm-node" data-cert="oplb3-bnsp">
            <span class="cert-badge-tag">BNSP INDONESIA</span>
            <h3 class="cert-title">OPLB3 (PENGOLAHAN LIMBAH B3)</h3>
            <p class="cert-issuer">BNSP — Operasional Limbah Bahan Berbahaya & Beracun</p>
            <div class="cert-reg-number">NO. REG: ENV.1456.14873 2025</div>
          </div>

          <!-- Cert 7 -->
          <div class="cert-card swarm-node" data-cert="popu-bnsp">
            <span class="cert-badge-tag">BNSP INDONESIA</span>
            <h3 class="cert-title">POPU (PENCEMARAN UDARA)</h3>
            <p class="cert-issuer">BNSP — Pengendalian Emisi Cerobong & Udara Ambien</p>
            <div class="cert-reg-number">NO. REG: ENV.1456.18070 2025</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ==========================================================================
       CONTACT SECTION & TRANSMISSION CONSOLE
       ========================================================================== -->
  <section class="contact-section" id="contact">
    <div class="container">
      <div class="section-header swarm-node">
        <span class="section-label">DIRECT TRANSMISSION FREQUENCY</span>
        <h2 class="section-title">HUBUNGI DANY WIRATAMA</h2>
        <p class="section-subtitle">
          Terbuka untuk peluang karir HSE Staff, Safety Officer, K3 Coordinator, maupun audit kepatuhan lingkungan industri.
        </p>
      </div>

      <div class="contact-grid">
        <!-- Direct Channels -->
        <div class="contact-channels swarm-node">
          <!-- WhatsApp Card -->
          <a href="https://wa.me/6282217027098" target="_blank" rel="noopener noreferrer" class="channel-card">
            <div class="channel-left">
              <div class="channel-icon">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path>
                </svg>
              </div>
              <div class="channel-info">
                <h4>WHATSAPP DIRECT</h4>
                <p>+62 822-1702-7098 (Respon Cepat)</p>
              </div>
            </div>
            <span>↗</span>
          </a>

          <!-- Email Card -->
          <div class="channel-card" id="copyEmailBtn" style="cursor: pointer;" title="Klik untuk menyalin email">
            <div class="channel-left">
              <div class="channel-icon">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                  <polyline points="22,6 12,13 2,6"></polyline>
                </svg>
              </div>
              <div class="channel-info">
                <h4>EMAIL TRANSMISSION</h4>
                <p>danywiratama@gmail.com (Salin Alamat)</p>
              </div>
            </div>
            <span>📋</span>
          </div>

          <!-- LinkedIn Card -->
          <a href="https://linkedin.com/in/dany-wiratama-829280101" target="_blank" rel="noopener noreferrer" class="channel-card">
            <div class="channel-left">
              <div class="channel-icon">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path>
                  <rect x="2" y="9" width="4" height="12"></rect>
                  <circle cx="4" cy="4" r="2"></circle>
                </svg>
              </div>
              <div class="channel-info">
                <h4>LINKEDIN PROFESSIONAL</h4>
                <p>linkedin.com/in/dany-wiratama-829280101</p>
              </div>
            </div>
            <span>↗</span>
          </a>

          <!-- Location Info -->
          <div class="channel-card" style="cursor: default;">
            <div class="channel-left">
              <div class="channel-icon">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                  <circle cx="12" cy="10" r="3"></circle>
                </svg>
              </div>
              <div class="channel-info">
                <h4>LOKASI DOMISILI</h4>
                <p>Karaba Indah Blok C No.23, Telukjambe Timur, Karawang</p>
              </div>
            </div>
            <span style="font-family: monospace; font-size: 11px; color: var(--safety-green);">ACTIVE</span>
          </div>
        </div>

        <!-- Direct Transmission Console Form -->
        <div class="transmission-console swarm-node">
          <h3 class="console-title">DIRECT TRANSMISSION CONSOLE</h3>
          <p class="console-desc">Kirimkan pesan penawaran kerja sama, jadwal wawancara, atau diskusi teknis K3L secara langsung.</p>

          <form id="contactForm">
            <div class="form-group">
              <label for="formName">Nama Lengkap / Instansi</label>
              <input type="text" id="formName" class="form-control" placeholder="Contoh: HR Manager / PT Rekanan" required />
            </div>

            <div class="form-group">
              <label for="formEmail">Alamat Email Korespondensi</label>
              <input type="email" id="formEmail" class="form-control" placeholder="nama@perusahaan.com" required />
            </div>

            <div class="form-group">
              <label for="formMessage">Detail Transmisi Pesan</label>
              <textarea id="formMessage" class="form-control" placeholder="Tuliskan spesifikasi posisi atau kebutuhan keselamatan kerja Anda..." required></textarea>
            </div>

            <button type="submit" class="btn-submit">
              <span>DISPATCH TRANSMISSION</span>
              <span>⚡</span>
            </button>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- ==========================================================================
       SITE FOOTER & SOUNDTRACK FOOTNOTE CREDIT CARD
       ========================================================================== -->
  <footer class="site-footer swarm-node">
    <div class="container">
      <div class="footer-top">
        <div class="footer-brand">
          DANY<span>.</span>
          <p>Safety Health Environment Staff • Ahli K3 Umum • POPU & OPLB3 Specialist</p>
        </div>

        <!-- Footnote Attribution Card (Spesifikasi Bagian 2) -->
        <div class="music-attribution-card">
          <div class="music-info-left">
            <div class="music-icon-disc">♫</div>
            <div class="music-meta">
              <h5>SOUNDTRACK: Electro - Electro Music</h5>
              <p>Artist: JonasBlakewood • 41-Second Swarm Rebuild Sync</p>
            </div>
          </div>
          <a href="https://pixabay.com/id/music/rumah-electro-electro-music-533845" target="_blank" rel="noopener noreferrer" class="music-pixabay-link">
            Pixabay Track #533845 (Bebas Royalti) ↗
          </a>
        </div>
      </div>

      <div class="footer-bottom">
        <div>© 2026 Dany Wiratama. All Rights Reserved. Industrial HSE Portfolio.</div>
        <div>Built with Modern HTML5, CSS3 & Vanilla JavaScript ES6+. Zero Framework Dependencies.</div>
      </div>
    </div>
  </footer>

  <!-- ==========================================================================
       POPUP MODAL: PROJECT BLUEPRINT DETAILS
       ========================================================================== -->
  <div class="modal-overlay" id="projectModal" role="dialog" aria-modal="true" aria-labelledby="modalTitle">
    <div class="modal-content">
      <button class="modal-close-btn" id="projectModalClose" aria-label="Close Modal">✕</button>
      <div class="modal-body">
        <div class="modal-image-preview">
          <img id="modalImage" src="" alt="Project Preview" />
        </div>
        <div class="modal-header-tag">
          <span id="modalCategory"></span>
          <span>•</span>
          <span id="modalCompany"></span>
        </div>
        <h3 class="modal-title" id="modalTitle"></h3>
        <p class="modal-desc-text" id="modalDesc"></p>
        <div class="modal-specs-grid" id="modalSpecs"></div>
      </div>
    </div>
  </div>

  <!-- ==========================================================================
       POPUP MODAL: CERTIFICATION CREDENTIAL DETAILS
       ========================================================================== -->
  <div class="modal-overlay" id="certModal" role="dialog" aria-modal="true" aria-labelledby="certModalTitle">
    <div class="modal-content">
      <button class="modal-close-btn" id="certModalClose" aria-label="Close Modal">✕</button>
      <div class="modal-body">
        <div class="modal-header-tag">
          <span id="certModalBadge"></span>
          <span>•</span>
          <span id="certModalDate"></span>
        </div>
        <h3 class="modal-title" id="certModalTitle"></h3>
        <p class="modal-desc-text" style="color: var(--safety-orange); font-family: monospace; font-weight: bold; margin-bottom: 14px;" id="certModalReg"></p>
        <p class="modal-desc-text" style="font-size: 13px; color: var(--ink-dim); margin-bottom: 16px;" id="certModalIssuer"></p>
        <p class="modal-desc-text" id="certModalDesc"></p>
      </div>
    </div>
  </div>

  <!-- Toast Notification Container -->
  <div class="toast-notice" id="toastNotice"></div>

  <!-- Custom JavaScript Interaction Engine -->
  <script src="assets/js/main.js"></script>
</body>
</html>
