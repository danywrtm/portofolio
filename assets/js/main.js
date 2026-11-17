/**
 * DANY WIRATAMA - SAFETY HEALTH ENVIRONMENT (HSE) STAFF
 * Portfolio Interaction Engine & Swarm Rebuild System
 * 41-Second Live Element-by-Element Reconstruction
 */

document.addEventListener('DOMContentLoaded', () => {
  // ==========================================================================
  // 1. WEB AUDIO API SYNTHESIZER (HAPTIC AUDIO FEEDBACK)
  // ==========================================================================
  let audioCtx = null;
  let soundEnabled = true;

  function initAudio() {
    if (!audioCtx) {
      const AudioContext = window.AudioContext || window.webkitAudioContext;
      if (AudioContext) {
        audioCtx = new AudioContext();
      }
    }
    if (audioCtx && audioCtx.state === 'suspended') {
      audioCtx.resume();
    }
  }

  function playUiBeep(freq = 600, type = 'sine', duration = 0.08, volume = 0.05) {
    if (!soundEnabled) return;
    try {
      initAudio();
      if (!audioCtx) return;
      const osc = audioCtx.createOscillator();
      const gain = audioCtx.createGain();
      osc.type = type;
      osc.frequency.setValueAtTime(freq, audioCtx.currentTime);
      gain.gain.setValueAtTime(volume, audioCtx.currentTime);
      gain.gain.exponentialRampToValueAtTime(0.0001, audioCtx.currentTime + duration);
      osc.connect(gain);
      gain.connect(audioCtx.destination);
      osc.start();
      osc.stop(audioCtx.currentTime + duration);
    } catch (e) {
      console.warn('Audio feedback error', e);
    }
  }

  function playTypewriterClick() {
    if (!soundEnabled) return;
    try {
      initAudio();
      if (!audioCtx) return;
      const osc = audioCtx.createOscillator();
      const gain = audioCtx.createGain();
      osc.type = 'sine';
      osc.frequency.setValueAtTime(1200 + Math.random() * 400, audioCtx.currentTime);
      gain.gain.setValueAtTime(0.025, audioCtx.currentTime);
      gain.gain.exponentialRampToValueAtTime(0.0001, audioCtx.currentTime + 0.025);
      osc.connect(gain);
      gain.connect(audioCtx.destination);
      osc.start();
      osc.stop(audioCtx.currentTime + 0.025);
    } catch (e) {}
  }

  function playBoxSnap(freq = 280) {
    if (!soundEnabled) return;
    try {
      initAudio();
      if (!audioCtx) return;
      const osc = audioCtx.createOscillator();
      const gain = audioCtx.createGain();
      osc.type = 'triangle';
      osc.frequency.setValueAtTime(freq, audioCtx.currentTime);
      osc.frequency.exponentialRampToValueAtTime(60, audioCtx.currentTime + 0.12);
      gain.gain.setValueAtTime(0.08, audioCtx.currentTime);
      gain.gain.exponentialRampToValueAtTime(0.0001, audioCtx.currentTime + 0.12);
      osc.connect(gain);
      gain.connect(audioCtx.destination);
      osc.start();
      osc.stop(audioCtx.currentTime + 0.12);
    } catch (e) {}
  }

  function playRebuildComplete() {
    if (!soundEnabled) return;
    try {
      initAudio();
      if (!audioCtx) return;
      [523.25, 659.25, 783.99, 1046.5].forEach((freq, idx) => {
        const osc = audioCtx.createOscillator();
        const gain = audioCtx.createGain();
        osc.type = 'sine';
        osc.frequency.setValueAtTime(freq, audioCtx.currentTime + idx * 0.07);
        gain.gain.setValueAtTime(0.06, audioCtx.currentTime + idx * 0.07);
        gain.gain.exponentialRampToValueAtTime(0.0001, audioCtx.currentTime + idx * 0.07 + 0.35);
        osc.connect(gain);
        gain.connect(audioCtx.destination);
        osc.start(audioCtx.currentTime + idx * 0.07);
        osc.stop(audioCtx.currentTime + idx * 0.07 + 0.35);
      });
    } catch (e) {}
  }

  // ==========================================================================
  // 2. PROJECT DATA & POPUP MODAL SYSTEM (8 HSE PROJECTS)
  // ==========================================================================
  const projectsData = {
    'safety-talk': {
      title: 'Daily Safety Morning Talk Revamp & STOP 6 Culture',
      category: 'Safety Culture & Behavior',
      company: 'PT Fuji Seat Indonesia',
      date: 'Operational Continuous Protocol',
      image: 'assets/images/projects/project-safety-talk.svg',
      tags: ['Daily Safety Talk', 'STOP 6', 'KYT (Kiken Yochi)', 'Behavior Safety'],
      description: 'Restructured the daily plant-wide morning safety briefing protocol (07:30 AM) across automotive interior production divisions. Integrated Toyota STOP 6 hazard categorization (Apparatus, Heavy Load, Vehicle, Falling, Electrical, Thermal) into active 5-minute pre-shift discussions, achieving 100% daily shift participation and zero safety communication blindspots.',
      specs: [
        { label: 'Scope', value: 'All Shifts & Assembly Lines' },
        { label: 'Framework', value: 'STOP 6 + KYT Pointing & Calling' },
        { label: 'Participation', value: '100% Daily Compliance' },
        { label: 'Safety Metric', value: 'Zero Overlooked Start-up Hazards' }
      ]
    },
    'machine-safety': {
      title: 'Machine Guarding & Safety Device Interlock Feasibility',
      category: 'Machine & Equipment Safety',
      company: 'PT Fuji Seat Indonesia',
      date: 'Manufacturing Plant Safety',
      image: 'assets/images/projects/project-machine-safety.svg',
      tags: ['Interlock Sensors', 'Light Curtains', 'Feasibility Cert', 'E-Stop Validation'],
      description: 'Spearheaded comprehensive inspections and government feasibility validation for hydraulic stamping dies, robotic welders, and conveyor feeds. Audited optical safety curtains, emergency stop (E-Stop) hardwire circuits, and mechanical interlocks to secure official operational certificates from Disnaker.',
      specs: [
        { label: 'Equipment Audited', value: '80+ Industrial Machines' },
        { label: 'Circuit Standard', value: 'Cat-4 / SIL 3 Safety Relay' },
        { label: 'Government Permit', value: 'Disnaker Feasibility Granted' },
        { label: 'Pinch Incidents', value: '0 Incidents Recorded' }
      ]
    },
    'fire-hydrant': {
      title: 'Emergency Fire Preparedness & APAR Fleet Governance',
      category: 'Fire & Emergency Response',
      company: 'PT Fuji Seat Indonesia',
      date: 'Damkar D Licensed Protocol',
      image: 'assets/images/projects/project-fire-hydrant.svg',
      tags: ['Damkar D License', 'Fire Hydrant Test', '140+ APAR Units', 'Evacuation Drill'],
      description: 'Implemented standard operational readiness for industrial fire safety in accordance with Permenaker No. 04/MEN/1980. Managed digital barcode tracking for 140+ dry chemical powder & CO2 fire extinguishers (APAR), conducted quarterly hydrant flow tests (7.2 Bar pressure), and commanded plant-wide emergency fire evacuation drills.',
      specs: [
        { label: 'Fleet Managed', value: '140+ APAR Units & 12 Hydrants' },
        { label: 'Inspection Cycle', value: 'Monthly Barcode Audit' },
        { label: 'Staff Trained', value: '800+ Personnel in Live Drill' },
        { label: 'Response Readiness', value: '100% Operational Status' }
      ]
    },
    'environmental-klhk': {
      title: 'Industrial Environmental Compliance & SIMPEL KLHK',
      category: 'Environmental & Compliance',
      company: 'PT Fuji Seat Indonesia',
      date: 'POPU & OPLB3 Governance',
      image: 'assets/images/projects/project-environmental-klhk.svg',
      tags: ['SIMPEL KLHK', 'UKL-UPL Matrix', 'OPLB3 B3 Waste', 'POPU Air Emission'],
      description: 'Directed environmental monitoring documentation (UKL-UPL manual and digital) and statutory synchronization to the Ministry of Environment and Forestry (SIMPEL KLHK) portal. Handled hazardous waste (Limbah B3) cold storage manifesting via FESTRONIK and supervised isokinetic stack emissions for POPU certification.',
      specs: [
        { label: 'Reporting Portal', value: 'SIMPEL KLHK (Semester & Annual)' },
        { label: 'Permit Types', value: 'UKL-UPL, Limbah B3, POPU Air' },
        { label: 'Manifest Status', value: '100% FESTRONIK Reconciled' },
        { label: 'Audit Compliance', value: 'Full Environmental Compliance' }
      ]
    },
    'high-risk-tkbt': {
      title: 'High-Risk Confined Space & Working at Heights (TKBT 2)',
      category: 'High-Risk Operations',
      company: 'PT Pionir Tekno Gemilang',
      date: 'Kemnaker Licensed Protocol',
      image: 'assets/images/projects/project-high-risk-tkbt.svg',
      tags: ['TKBT Tingkat 2', 'Confined Space Entry', 'Permit-to-Work (PTW)', '4-Gas Telemetry'],
      description: 'Orchestrated rigorous Permit-to-Work (PTW) enforcement for elevated structure construction and confined tank maintenance. Enforced full-body harness double-lanyard anchorage, tripod rescue winch readiness, and continuous 4-gas atmospheric monitoring (O2, LEL, CO, H2S) before authorized worker descent.',
      specs: [
        { label: 'Rig Certification', value: 'TKBT 2 Kemnaker RI' },
        { label: 'Gas Monitoring', value: 'O2, CO, H2S, LEL Telemetry' },
        { label: 'Rescue Provision', value: 'Tripod Winch & Safety Watcher' },
        { label: 'Fall Incident Rate', value: 'Zero Falls (0%)' }
      ]
    },
    'csms-contractor': {
      title: 'Contractor Safety Management (CSMS) & Forklift Fleet',
      category: 'Contractor & Logistics',
      company: 'PT Fuji Seat Indonesia',
      date: 'Supply Chain Safety',
      image: 'assets/images/projects/project-csms-contractor.svg',
      tags: ['CSMS Governance', 'Vehicle Inspection', 'Forklift SIO Audit', 'Demarcation'],
      description: 'Established the Contractor Safety Management System (CSMS) ensuring third-party vendors and construction personnel undergo risk screening, JSA review, and safety induction prior to factory floor access. Administered daily pre-shift inspections and SIO operator licensing for factory forklifts and logistics trucks.',
      specs: [
        { label: 'Vendors Screened', value: '35+ Specialized Contractors' },
        { label: 'Forklift Fleet', value: '18 Units Audited Daily' },
        { label: 'Visual Controls', value: 'Blue Spot Safety Lights' },
        { label: 'Logistic Collisions', value: 'Zero Forklift Collisions' }
      ]
    },
    'safety-academy': {
      title: 'New Employee Safety Onboarding & KYT Simulator',
      category: 'Training & Education',
      company: 'PT Fuji Seat Indonesia',
      date: 'Human Capital HSE Training',
      image: 'assets/images/projects/project-safety-academy.svg',
      tags: ['Safety Induction', 'Fire Fighting Hands-on', 'Defensive Riding', 'Evacuation Drill'],
      description: 'Formulated and led an intensive 4-pillar onboarding academy for all incoming employees, technicians, and interns. Delivered structured training on general K3L policies, hands-on fire extinguisher usage, defensive motorcycle commuting (Safety Riding), and earthquake evacuation simulations.',
      specs: [
        { label: 'Graduates', value: '1,000+ Employees Trained' },
        { label: 'Core Modules', value: 'Induction, Fire, Riding, Evacuation' },
        { label: 'Methodology', value: 'Hands-on Simulation & KYT' },
        { label: 'Passing Score', value: '100% Verification Required' }
      ]
    },
    'incident-investigation': {
      title: 'Root Cause Accident Investigation & Hitotema Kaizen',
      category: 'Incident Investigation & Kaizen',
      company: 'PT Fuji Seat Indonesia',
      date: 'PDCA & Zero Incident',
      image: 'assets/images/projects/project-incident-investigation.svg',
      tags: ['5-Why Analysis', 'Ishikawa Fishbone', 'Hitotema Program', 'Poka-Yoke Kaizen'],
      description: 'Administered incident investigation workflows utilizing 5-Why root cause analysis and Ishikawa fishbone diagrams. Championed the Hitotema Kaizen initiative (eliminating awkward or hazardous micro-motions in production) to install mechanical fail-safes and prevent repeat minor incidents.',
      specs: [
        { label: 'Analytical Tools', value: '5-Why, Ishikawa & Barrier Analysis' },
        { label: 'Kaizen Submissions', value: '50+ Hitotema Improvements' },
        { label: 'Recurrence Rate', value: '0% Repeat Incidents' },
        { label: 'Resolution Cycle', value: '< 48 Hours Investigation SLA' }
      ]
    }
  };

  const projectModal = document.getElementById('projectModal');
  const projectModalClose = document.getElementById('projectModalClose');

  function openProjectModal(key) {
    const data = projectsData[key];
    if (!data || !projectModal) return;

    document.getElementById('modalImage').src = data.image;
    document.getElementById('modalImage').alt = data.title;
    document.getElementById('modalCategory').textContent = data.category;
    document.getElementById('modalCompany').textContent = data.company;
    document.getElementById('modalTitle').textContent = data.title;
    document.getElementById('modalDesc').textContent = data.description;

    const specsGrid = document.getElementById('modalSpecs');
    specsGrid.innerHTML = data.specs.map(s => `
      <div class="spec-cell">
        <strong>${s.label}</strong>
        <span>${s.value}</span>
      </div>
    `).join('');

    projectModal.classList.add('is-open');
    document.body.style.overflow = 'hidden';
    playUiBeep(700, 'sine', 0.1, 0.05);
  }

  function closeProjectModal() {
    if (projectModal) {
      projectModal.classList.remove('is-open');
      document.body.style.overflow = '';
      playUiBeep(450, 'sine', 0.08, 0.03);
    }
  }

  if (projectModalClose) {
    projectModalClose.addEventListener('click', closeProjectModal);
  }
  if (projectModal) {
    projectModal.addEventListener('click', (e) => {
      if (e.target === projectModal) closeProjectModal();
    });
  }

  document.querySelectorAll('.project-card').forEach(card => {
    card.addEventListener('click', () => {
      const pId = card.getAttribute('data-project');
      openProjectModal(pId);
    });
  });

  // ==========================================================================
  // 3. PROJECT FILTER TABS
  // ==========================================================================
  const filterButtons = document.querySelectorAll('.filter-btn');
  const projectCards = document.querySelectorAll('.project-card');

  filterButtons.forEach(btn => {
    btn.addEventListener('click', () => {
      filterButtons.forEach(b => b.classList.remove('active'));
      btn.classList.add('active');

      const filter = btn.getAttribute('data-filter');
      projectCards.forEach(card => {
        const cat = card.getAttribute('data-category');
        if (filter === 'all' || cat === filter) {
          card.style.display = 'flex';
          setTimeout(() => {
            card.style.opacity = '1';
            card.style.transform = 'translateY(0)';
          }, 30);
        } else {
          card.style.opacity = '0';
          card.style.transform = 'translateY(15px)';
          setTimeout(() => {
            card.style.display = 'none';
          }, 200);
        }
      });
      playUiBeep(580, 'triangle', 0.06, 0.03);
    });
  });

  // ==========================================================================
  // 4. ACCORDION (EXPERIENCE ROWS)
  // ==========================================================================
  const experienceRows = document.querySelectorAll('.experience-row');
  experienceRows.forEach(row => {
    const header = row.querySelector('.experience-header');
    if (header) {
      header.addEventListener('click', () => {
        const isOpen = row.classList.contains('is-open');
        experienceRows.forEach(r => r.classList.remove('is-open'));
        if (!isOpen) {
          row.classList.add('is-open');
          playUiBeep(520, 'triangle', 0.08, 0.03);
        }
      });
    }
  });

  // ==========================================================================
  // 5. CERTIFICATION DETAIL MODAL
  // ==========================================================================
  const certData = {
    'ahli-k3u': {
      title: 'Sertifikasi Ahli K3 Umum (Kemnaker RI)',
      issuer: 'Kementerian Ketenagakerjaan Republik Indonesia',
      date: 'Lisensi Resmi Ahli Keselamatan & Kesehatan Kerja',
      badge: 'AHLI K3U KEMNAKER',
      reg: 'SER.18. 19976/AK3/U/VI/2018',
      desc: 'Kompetensi formal tertinggi dalam merencanakan, melaksanakan, dan mengevaluasi sistem manajemen K3 (SMK3) di tempat kerja. Meliputi identifikasi bahaya, penyusunan SOP K3L, investigasi insiden, dan koordinasi Panitia Pembina Keselamatan dan Kesehatan Kerja (P2K3L).'
    },
    'ahli-k3-bnsp': {
      title: 'Sertifikasi Profesi Ahli K3 (BNSP)',
      issuer: 'Badan Nasional Sertifikasi Profesi (BNSP)',
      date: 'Standar Kompetensi Kerja Nasional Indonesia (SKKNI)',
      badge: 'BNSP CERTIFIED',
      reg: 'NO.REG.KKK.2334.00139 2024',
      desc: 'Pengakuan kompetensi nasional atas standar asesmen risiko industri, pengendalian bahaya lingkungan kerja, kepatuhan regulasi K3 nasional, dan kesiapsiagaan tanggap darurat di sektor manufaktur dan industri berat.'
    },
    'tkbt-2': {
      title: 'Tenaga Kerja Bangunan Tinggi Tingkat 2 (TKBT 2)',
      issuer: 'Kementerian Ketenagakerjaan Republik Indonesia',
      date: 'Bekerja pada Ketinggian & Akses Tali',
      badge: 'TKBT TINGKAT 2',
      reg: 'SERT. 1496/TKBT-TK2/IV/2019',
      desc: 'Sertifikasi keahlian teknis bekerja pada struktur ketinggian menggunakan sistem penahan jatuh (fall arrest system), teknik manuver tali (rope access), perancah (scaffolding), serta prosedur penyelamatan darurat (rescue) di ketinggian.'
    },
    'damkar-d': {
      title: 'Petugas Peran Kebakaran Kelas D (Damkar D)',
      issuer: 'Kementerian Ketenagakerjaan Republik Indonesia',
      date: 'Penanggulangan Kebakaran & Inspeksi Proteksi Kebakaran',
      badge: 'DAMKAR D RESCUE',
      reg: 'NO. 5/0674150824/AS.01.04/VIII/2024',
      desc: 'Keahlian teknis operasional penanggulangan kebakaran di lingkungan kerja sesuai Kepmenaker No. 186/MEN/1999: inspeksi kelayakan APAR, hidran pabrik, tata letak jalur evakuasi, dan komando tim tanggap darurat (ERT).'
    },
    'confined-space': {
      title: 'Confined Space Entry Course (K3 Ruang Terbatas)',
      issuer: 'Lembaga Pelatihan K3 Terakreditasi',
      date: 'Keselamatan Operasi Ruang Terbatas',
      badge: 'CONFINED SPACE EXPERT',
      reg: 'NO. CERTIFICATE: 1628/SKN/III/2019',
      desc: 'Protokol ketat izin kerja masuk ruang terbatas (tangki, silo, bunker): uji atmosfer gas beracun/mudah terbakar dengan 4-gas detector, isolasi energi (LOTO), ventilasi paksa, dan evakuasi darurat dengan sistem tripod winch.'
    },
    'oplb3-bnsp': {
      title: 'Operasional Pengolahan Limbah B3 (OPLB3 BNSP)',
      issuer: 'Badan Nasional Sertifikasi Profesi (BNSP)',
      date: 'Pengelolaan Limbah Bahan Berbahaya & Beracun',
      badge: 'OPLB3 BNSP SPECIALIST',
      reg: 'NO.REG.ENV.1456.14873 2025',
      desc: 'Kompetensi teknis penyimpanan, pengemasan, pelabelan, simbolisasi, dan penyerahan limbah B3 kepada pihak ketiga berizin KLHK, disertai pencatatan neraca limbah dan pelaporan digital FESTRONIK.'
    },
    'popu-bnsp': {
      title: 'Penanggung Jawab Operasional Pengendalian Pencemaran Udara (POPU)',
      issuer: 'Badan Nasional Sertifikasi Profesi (BNSP)',
      date: 'Pengendalian Emisi Udara & Kualitas Ambien',
      badge: 'POPU BNSP SPECIALIST',
      reg: 'NO.REG.ENV.1456.18070 2025',
      desc: 'Pengoperasian dan pengawasan alat pengendali emisi cerobong industri, pemantauan kualitas udara ambien, pengambilan sampel isokinetik, serta pelaporan berkala melalui sistem SIMPEL KLHK.'
    }
  };

  const certModal = document.getElementById('certModal');
  const certModalClose = document.getElementById('certModalClose');

  function openCertModal(key) {
    const data = certData[key];
    if (!data || !certModal) return;

    document.getElementById('certModalTitle').textContent = data.title;
    document.getElementById('certModalIssuer').textContent = data.issuer;
    document.getElementById('certModalDate').textContent = data.date;
    document.getElementById('certModalBadge').textContent = data.badge;
    document.getElementById('certModalReg').textContent = data.reg;
    document.getElementById('certModalDesc').textContent = data.desc;

    certModal.classList.add('is-open');
    document.body.style.overflow = 'hidden';
    playUiBeep(720, 'sine', 0.1, 0.05);
  }

  function closeCertModal() {
    if (certModal) {
      certModal.classList.remove('is-open');
      document.body.style.overflow = '';
      playUiBeep(450, 'sine', 0.08, 0.03);
    }
  }

  if (certModalClose) {
    certModalClose.addEventListener('click', closeCertModal);
  }
  if (certModal) {
    certModal.addEventListener('click', (e) => {
      if (e.target === certModal) closeCertModal();
    });
  }

  document.querySelectorAll('.cert-card').forEach(card => {
    card.addEventListener('click', () => {
      const cId = card.getAttribute('data-cert');
      openCertModal(cId);
    });
  });

  // Global ESC key listener for modals
  window.addEventListener('keydown', (e) => {
    if (e.key === 'Escape') {
      closeProjectModal();
      closeCertModal();
    }
  });

  // ==========================================================================
  // 6. COPY TO CLIPBOARD & TOAST NOTIFICATION
  // ==========================================================================
  function showToast(message) {
    let toast = document.getElementById('toastNotice');
    if (!toast) {
      toast = document.createElement('div');
      toast.id = 'toastNotice';
      toast.className = 'toast-notice';
      document.body.appendChild(toast);
    }
    toast.innerHTML = `<span style="color:var(--safety-orange); font-size:16px;">✦</span> ${message}`;
    toast.classList.add('show');
    setTimeout(() => {
      toast.classList.remove('show');
    }, 3200);
  }

  const copyEmailBtn = document.getElementById('copyEmailBtn');
  if (copyEmailBtn) {
    copyEmailBtn.addEventListener('click', (e) => {
      e.preventDefault();
      const email = 'danywiratama@gmail.com';
      navigator.clipboard.writeText(email).then(() => {
        showToast('Email address copied to clipboard!');
        playUiBeep(880, 'sine', 0.12, 0.06);
      }).catch(() => {
        window.location.href = `mailto:${email}`;
      });
    });
  }

  // ==========================================================================
  // 7. CONTACT FORM TRANSMISSION HANDLER
  // ==========================================================================
  const contactForm = document.getElementById('contactForm');
  if (contactForm) {
    contactForm.addEventListener('submit', (e) => {
      e.preventDefault();
      const name = document.getElementById('formName').value.trim();
      const email = document.getElementById('formEmail').value.trim();
      const message = document.getElementById('formMessage').value.trim();

      if (!name || !email || !message) {
        showToast('Harap isi semua kolom formulir.');
        playUiBeep(320, 'sawtooth', 0.15, 0.05);
        return;
      }

      showToast(`Terima kasih, ${name}! Pesan transmisi HSE Anda telah terkirim.`);
      playUiBeep(980, 'sine', 0.2, 0.07);
      contactForm.reset();
    });
  }

  // ==========================================================================
  // 8. MOBILE MENU DRAWER
  // ==========================================================================
  const mobileToggle = document.getElementById('mobileToggle');
  const mobileDrawer = document.getElementById('mobileDrawer');
  if (mobileToggle && mobileDrawer) {
    mobileToggle.addEventListener('click', () => {
      const isOpen = mobileDrawer.classList.toggle('is-open');
      mobileToggle.classList.toggle('is-active', isOpen);
      playUiBeep(isOpen ? 600 : 400, 'sine', 0.08, 0.04);
    });

    mobileDrawer.querySelectorAll('a').forEach(a => {
      a.addEventListener('click', () => {
        mobileDrawer.classList.remove('is-open');
        mobileToggle.classList.remove('is-active');
      });
    });
  }

  // ==========================================================================
  // 9. TEXT SCRAMBLER CLASS (HURUF DEMI HURUF DECODING)
  // ==========================================================================
  class TextScrambler {
    constructor(element) {
      this.el = element;
      this.chars = '!<>-_\\/[]{}—=+*^?#________0123456789';
      this.originalText = element.getAttribute('data-original-text') || element.innerText.trim();
      element.setAttribute('data-original-text', this.originalText);
    }

    scramble(targetText = null) {
      return new Promise((resolve) => {
        const finalText = targetText || this.originalText;
        let iteration = 0;
        const maxIterations = Math.max(finalText.length * 2.2, 16);
        
        clearInterval(this.interval);
        this.interval = setInterval(() => {
          this.el.innerHTML = finalText
            .split('')
            .map((letter, index) => {
              if (index < iteration / 2.2) {
                return letter;
              }
              const randomChar = this.chars[Math.floor(Math.random() * this.chars.length)];
              return `<span class="scramble-char">${randomChar}</span>`;
            })
            .join('');

          if (iteration % 3 === 0) {
            playTypewriterClick();
          }

          if (iteration >= maxIterations) {
            clearInterval(this.interval);
            this.el.innerText = finalText;
            resolve();
          }
          iteration += 1;
        }, 28);
      });
    }
  }

  // ==========================================================================
  // 10. UNIFIED AUDIO CONTROLLER & TRACK MANAGER
  // ==========================================================================
  const audioTrack = document.getElementById('swarmAudioTrack');
  const soundToggle = document.getElementById('soundToggle');

  function startAudioPlayback() {
    if (!audioTrack) return;
    initAudio();

    audioTrack.muted = false;
    audioTrack.volume = 1.0;
    const playPromise = audioTrack.play();
    if (playPromise !== undefined) {
      playPromise
        .then(() => {
          soundEnabled = true;
          if (soundToggle) soundToggle.classList.add('is-active');
          console.log('Audio playback initiated successfully.');
        })
        .catch((err) => {
          console.warn('Autoplay restricted by browser. Awaiting first gesture:', err);
          const unlockAudio = () => {
            initAudio();
            audioTrack.play().then(() => {
              soundEnabled = true;
              if (soundToggle) soundToggle.classList.add('is-active');
              removeUnlock();
            }).catch(() => {});
          };

          const removeUnlock = () => {
            ['click', 'pointerdown', 'pointerup', 'keydown', 'touchstart'].forEach(evt => {
              window.removeEventListener(evt, unlockAudio, true);
            });
          };

          ['click', 'pointerdown', 'pointerup', 'keydown', 'touchstart'].forEach(evt => {
            window.addEventListener(evt, unlockAudio, { capture: true, passive: true });
          });
        });
    }
  }

  if (soundToggle) {
    soundToggle.addEventListener('click', (e) => {
      e.stopPropagation();
      soundEnabled = !soundEnabled;
      soundToggle.classList.toggle('is-active', soundEnabled);

      if (audioTrack) {
        if (soundEnabled) {
          initAudio();
          audioTrack.muted = false;
          audioTrack.volume = 1.0;
          audioTrack.play().catch(() => {});
          playUiBeep(880, 'sine', 0.1, 0.08);
          showToast('Sound Effects & Music Enabled 🔊');
        } else {
          audioTrack.pause();
          showToast('Sound Muted 🔇');
        }
      }
    });
  }

  // ==========================================================================
  // 11. SWARM REBUILD ENGINE (LIVE 41-SECOND ELEMENT-BY-ELEMENT RECONSTRUCTION)
  // ==========================================================================
  class SwarmRebuildEngine {
    constructor() {
      this.overlay = document.getElementById('swarmOverlay');
      this.hud = document.getElementById('swarmHud');
      this.hudText = document.getElementById('swarmHudText');
      this.cursors = [
        document.getElementById('swarmCursor1'),
        document.getElementById('swarmCursor2'),
        document.getElementById('swarmCursor3'),
        document.getElementById('swarmCursor4'),
        document.getElementById('swarmCursor5')
      ].filter(Boolean);

      this.cursorColors = ['#ff6b1a', '#10b981', '#facc15', '#06b6d4', '#a855f7'];
      this.isBusy = false;
      this.isSkipping = false;
      this.initTriggers();
    }

    initTriggers() {
      const topBtn = document.getElementById('swarmRebuildBtn');
      const heroBtn = document.getElementById('heroSwarmTrigger');
      const instantBtn = document.getElementById('instantBuildBtn');

      if (topBtn) {
        topBtn.addEventListener('click', () => this.run(true));
      }
      if (heroBtn) {
        heroBtn.addEventListener('click', () => this.run(true));
      }
      if (instantBtn) {
        instantBtn.addEventListener('click', () => this.finishInstantly());
      }
    }

    // Instantly complete the entire build without stopping or resetting audio
    finishInstantly() {
      this.isSkipping = true;

      // 1. Instantly unblank the document
      document.body.classList.remove('is-blank-slate');

      // 2. Reveal every single swarm target element immediately
      document.querySelectorAll('.swarm-node').forEach(el => {
        el.classList.add('node-built');
      });

      // 3. Remove active drag wireframe boxes or radar pings
      document.querySelectorAll('.swarm-drag-box, .swarm-ping').forEach(el => el.remove());

      // 4. Ensure scrambled texts are restored to clean final strings
      const nameH1 = document.querySelector('.hero-intro h1');
      const fullName = document.querySelector('.hero-fullname');
      const role = document.querySelector('.hero-role-badge span');
      const watermark = document.querySelector('.hero-watermark');
      if (nameH1) nameH1.innerText = 'DANY.';
      if (fullName) fullName.innerText = 'Dany Wiratama';
      if (role) role.innerText = 'SAFETY HEALTH ENVIRONMENT STAFF';
      if (watermark) watermark.innerText = 'SAFETY FIRST';

      // 5. Hide cursors and overlay
      this.cursors.forEach(cur => {
        cur.style.transition = 'opacity 0.25s ease';
        cur.style.opacity = '0';
      });
      if (this.overlay) this.overlay.classList.remove('is-active');

      // 6. Update HUD & play completion chime
      if (this.hud) {
        this.hudText.innerHTML = '<span style="color:#10b981;">✓</span> BUILD COMPLETE (INSTANT) // 100% OPERATIONAL';
        setTimeout(() => {
          this.hud.classList.remove('show');
        }, 1500);
      }

      playRebuildComplete();
      this.isBusy = false;
      console.log('Swarm build completed instantly. Audio continues playing normally.');
    }

    emitPing(x, y, color = '#ff6b1a') {
      const ping = document.createElement('div');
      ping.className = 'swarm-ping';
      ping.style.left = `${x}px`;
      ping.style.top = `${y}px`;
      ping.style.setProperty('--c-color', color);
      document.body.appendChild(ping);
      setTimeout(() => ping.remove(), 600);
    }

    setCursorPos(cursor, x, y, duration = 280) {
      if (!cursor) return;
      cursor.style.transition = `transform ${duration}ms cubic-bezier(0.22, 1, 0.36, 1)`;
      cursor.style.transform = `translate(${x}px, ${y}px)`;
    }

    createDragBox(startX, startY, endX, endY, label, color = '#ff6b1a', duration = 350) {
      const box = document.createElement('div');
      box.className = 'swarm-drag-box';
      box.setAttribute('data-label', label);
      box.style.setProperty('--c-color', color);
      box.style.left = `${Math.min(startX, endX)}px`;
      box.style.top = `${Math.min(startY, endY)}px`;
      box.style.width = '0px';
      box.style.height = '0px';
      document.body.appendChild(box);

      requestAnimationFrame(() => {
        box.style.width = `${Math.max(10, Math.abs(endX - startX))}px`;
        box.style.height = `${Math.max(10, Math.abs(endY - startY))}px`;
      });

      setTimeout(() => {
        box.remove();
      }, duration);
    }

    smoothScrollTo(targetY, duration = 800) {
      return new Promise((resolve) => {
        if (this.isSkipping) {
          resolve();
          return;
        }
        const startY = window.scrollY || window.pageYOffset;
        const diff = targetY - startY;
        if (Math.abs(diff) < 2) {
          resolve();
          return;
        }
        const startTime = performance.now();

        const step = (currentTime) => {
          if (this.isSkipping) {
            resolve();
            return;
          }
          const elapsed = currentTime - startTime;
          const progress = Math.min(elapsed / duration, 1);
          const ease = progress < 0.5 
            ? 2 * progress * progress 
            : 1 - Math.pow(-2 * progress + 2, 2) / 2;

          window.scrollTo(0, startY + diff * ease);

          if (progress < 1) {
            requestAnimationFrame(step);
          } else {
            window.scrollTo(0, targetY);
            resolve();
          }
        };
        requestAnimationFrame(step);
      });
    }

    // Build single element: drag bounding box, click, and IMMEDIATELY reveal it!
    async buildNode(el, label, cursorIdx = 0, durationMs = 1200, customAction = null) {
      if (!el || this.isSkipping) return;

      el.classList.add('swarm-node');

      const rect = el.getBoundingClientRect();
      const vh = window.innerHeight;
      if (rect.top < 70 || rect.bottom > vh - 60) {
        const currentY = window.scrollY || window.pageYOffset;
        const targetY = currentY + rect.top - (vh / 2 - rect.height / 2);
        const scrollDist = Math.abs(targetY - currentY);
        const scrollDur = Math.min(Math.max(scrollDist * 0.45, 300), 750);
        await this.smoothScrollTo(Math.max(0, targetY), scrollDur);
      }

      if (this.isSkipping) return;

      const updatedRect = el.getBoundingClientRect();
      const cur = this.cursors[cursorIdx % this.cursors.length];
      const color = this.cursorColors[cursorIdx % this.cursorColors.length];

      const startX = Math.max(10, updatedRect.left + 15);
      const startY = Math.max(10, updatedRect.top + 15);
      const endX = Math.min(window.innerWidth - 20, updatedRect.right - 15);
      const endY = Math.min(window.innerHeight - 20, updatedRect.bottom - 15);

      this.setCursorPos(cur, startX, startY, 220);
      await new Promise(r => setTimeout(r, 160));

      this.createDragBox(startX, startY, endX, endY, label, color, durationMs * 0.7);

      this.setCursorPos(cur, endX, endY, 240);
      await new Promise(r => setTimeout(r, 180));

      this.emitPing(endX, endY, color);
      playBoxSnap(240 + cursorIdx * 45);

      // Instantly turn on and reveal this element!
      el.classList.add('node-built');

      if (customAction) {
        try {
          await customAction();
        } catch (e) {
          console.warn('Custom action error', e);
        }
      }

      const remaining = durationMs - 400;
      if (remaining > 0 && !this.isSkipping) {
        await new Promise(r => setTimeout(r, remaining));
      }
    }

    // Run the full 41-second build sequence
    async run(isManualTrigger = false) {
      if (this.isBusy) return;
      this.isBusy = true;
      this.isSkipping = false;

      // 1. Audio Synchronization
      if (audioTrack) {
        if (isManualTrigger) {
          audioTrack.currentTime = 0;
        }
        startAudioPlayback();
      }

      // 2. Set canvas to blank slate & scroll to top
      document.body.classList.add('is-blank-slate');
      window.scrollTo(0, 0);

      // 3. Mark all target nodes as unbuilt
      const allTargets = [
        document.querySelector('.site-logo'),
        document.querySelector('.desktop-nav'),
        document.querySelector('.header-actions'),
        document.querySelector('.hero-top'),
        document.querySelector('.hero-watermark'),
        document.querySelector('.hero-portrait-wrapper'),
        document.querySelector('.hero-intro'),
        document.querySelector('.hero-stats'),
        document.querySelector('.hero-manifesto'),
        document.querySelector('.hero-bottom-actions'),
        document.getElementById('brand-ticker'),
        document.querySelector('#portfolio .section-header'),
        ...document.querySelectorAll('.project-card'),
        document.querySelector('#about .section-header'),
        ...document.querySelectorAll('.studio-col'),
        document.querySelector('.quote-panel'),
        document.querySelector('#experience .section-header'),
        ...document.querySelectorAll('.experience-row'),
        document.querySelector('#certifications .section-header'),
        ...document.querySelectorAll('.cert-card'),
        document.querySelector('#contact .section-header'),
        document.querySelector('.contact-channels'),
        document.querySelector('.transmission-console'),
        document.querySelector('.site-footer')
      ].filter(Boolean);

      allTargets.forEach(el => {
        el.classList.remove('node-built');
        el.classList.add('swarm-node');
      });

      if (this.hud) {
        this.hudText.textContent = '⚡ SWARM ENGINE // 41-SECOND HSE BUILD DEPLOYED';
        this.hud.classList.add('show');
      }

      // 4. Spawn 5 Cursors in screen center
      const w = window.innerWidth;
      const h = window.innerHeight;
      this.cursors.forEach((cur, idx) => {
        cur.style.opacity = '1';
        this.setCursorPos(cur, w / 2 + (idx - 2) * 50, h / 2, 0);
      });

      await new Promise(r => setTimeout(r, 450));

      // ----------------------------------------------------------------------
      // STEP 1 (0.5s - 3.5s): HEADER NAVBAR & BRANDING
      // ----------------------------------------------------------------------
      if (this.hudText) {
        this.hudText.textContent = '⚡ SWARM: DECODING BRAND IDENTITY & TOP CONTROLS...';
      }

      const logo = document.querySelector('.site-logo');
      const desktopNav = document.querySelector('.desktop-nav');
      const headerActions = document.querySelector('.header-actions');

      await this.buildNode(logo, 'BRAND // DANY.', 0, 1000, async () => {
        const logoText = logo.querySelector('.logo-text');
        if (logoText) new TextScrambler(logoText).scramble('DANY.');
      });

      await this.buildNode(desktopNav, 'NAVIGATION MATRIX', 1, 1000);
      await this.buildNode(headerActions, 'ACTION CONSOLE & CV PDF', 2, 1000);

      // ----------------------------------------------------------------------
      // STEP 2 (3.5s - 13.5s): HERO SECTION (BADGES, WATERMARK, PORTRAIT, STATS)
      // ----------------------------------------------------------------------
      if (this.hudText) {
        this.hudText.textContent = '⚡ SWARM: ASSEMBLING PORTRAIT NODE & HSE CREDENTIALS...';
      }

      const heroTop = document.querySelector('.hero-top');
      const heroWatermark = document.querySelector('.hero-watermark');
      const heroPortrait = document.querySelector('.hero-portrait-wrapper');
      const heroIntro = document.querySelector('.hero-intro');
      const heroStats = document.querySelector('.hero-stats');
      const heroManifesto = document.querySelector('.hero-manifesto');
      const heroBottom = document.querySelector('.hero-bottom-actions');

      await this.buildNode(heroTop, 'STATUS // AVAILABLE FOR HSE STAFF', 3, 1000);

      await this.buildNode(heroWatermark, 'SAFETY FIRST WATERMARK', 4, 1500, async () => {
        if (heroWatermark) new TextScrambler(heroWatermark).scramble('SAFETY FIRST');
      });

      await this.buildNode(heroPortrait, 'PORTRAIT NODE // DANY WIRATAMA', 0, 1800);

      await this.buildNode(heroIntro, 'IDENTITY // DANY WIRATAMA (HSE)', 1, 2000, async () => {
        const nameH1 = heroIntro ? heroIntro.querySelector('h1 .name-display') : null;
        const fullName = heroIntro ? heroIntro.querySelector('.hero-fullname') : null;
        const role = heroIntro ? heroIntro.querySelector('.hero-role-badge span') : null;
        if (nameH1) new TextScrambler(nameH1).scramble('DANY.');
        if (fullName) new TextScrambler(fullName).scramble('Dany Wiratama');
        if (role) new TextScrambler(role).scramble('SAFETY HEALTH ENVIRONMENT STAFF');
      });

      await this.buildNode(heroStats, 'METRICS // 6+ YRS & ZERO ACCIDENTS', 2, 1300);
      await this.buildNode(heroManifesto, 'HSE ENGINEERING PHILOSOPHY', 3, 800);
      await this.buildNode(heroBottom, 'QUICK DISPATCH & WORKS TRIGGER', 4, 800);

      // ----------------------------------------------------------------------
      // STEP 3 (13.5s - 16.0s): BRAND TICKER & WORKS HEADER
      // ----------------------------------------------------------------------
      if (this.hudText) {
        this.hudText.textContent = '⚡ SWARM: DEPLOYING HSE CAPABILITY TICKER...';
      }

      const brandTicker = document.getElementById('brand-ticker');
      const portfolioHeader = document.querySelector('#portfolio .section-header');

      await this.buildNode(brandTicker, 'INFINITE TECHNICAL TICKER', 0, 1200);
      await this.buildNode(portfolioHeader, 'SELECTED HSE WORKS', 1, 1000);

      // ----------------------------------------------------------------------
      // STEP 4 (16.0s - 25.6s): 8 PROJECT CARDS BUILT ONE BY ONE!
      // ----------------------------------------------------------------------
      const projectCards = Array.from(document.querySelectorAll('.project-card'));
      const cardLabels = [
        'CARD 01 // MORNING SAFETY TALK & STOP 6',
        'CARD 02 // MACHINE GUARDING INTERLOCK',
        'CARD 03 // FIRE HYDRANT & APAR FLEET',
        'CARD 04 // SIMPEL KLHK & UKL-UPL',
        'CARD 05 // CONFINED SPACE & TKBT 2',
        'CARD 06 // CSMS CONTRACTOR CONTROL',
        'CARD 07 // SAFETY ONBOARDING ACADEMY',
        'CARD 08 // HITOTEMA KAIZEN INVESTIGATION'
      ];

      for (let i = 0; i < projectCards.length; i++) {
        if (this.isSkipping) return;
        const card = projectCards[i];
        const label = cardLabels[i] || `HSE PROJECT 0${i + 1}`;
        if (this.hudText) {
          this.hudText.textContent = `⚡ SWARM: CONSTRUCTING ${label}...`;
        }
        await this.buildNode(card, label, i % 5, 1200);
      }

      // ----------------------------------------------------------------------
      // STEP 5 (25.6s - 31.6s): ABOUT & STUDIO MATRIX (3 COLS & MANIFESTO)
      // ----------------------------------------------------------------------
      if (this.hudText) {
        this.hudText.textContent = '⚡ SWARM: MAPPING ACADEMIC & TECHNICAL MATRIX...';
      }

      const aboutHeader = document.querySelector('#about .section-header');
      await this.buildNode(aboutHeader, 'STUDIO MATRIX // ABOUT DANY', 4, 1000);

      const studioCols = Array.from(document.querySelectorAll('.studio-col'));
      const studioLabels = [
        'STUDIO COL 01 // BALONGAN OIL & GAS',
        'STUDIO COL 02 // HSE CORE LICENSES',
        'STUDIO COL 03 // PROFESSIONAL PHILOSOPHY'
      ];

      for (let j = 0; j < studioCols.length; j++) {
        if (this.isSkipping) return;
        await this.buildNode(studioCols[j], studioLabels[j] || `MATRIX COL 0${j + 1}`, j % 5, 1100);
      }

      const quotePanel = document.querySelector('.quote-panel');
      if (quotePanel) {
        await this.buildNode(quotePanel, 'ZERO HARM COMMITMENT MANIFESTO', 2, 1300);
      }

      // ----------------------------------------------------------------------
      // STEP 6 (31.6s - 35.8s): CAREER JOURNEY & CERTIFICATIONS
      // ----------------------------------------------------------------------
      if (this.hudText) {
        this.hudText.textContent = '⚡ SWARM: LINKING CAREER TIMELINE & CREDENTIALS...';
      }

      const expHeader = document.querySelector('#experience .section-header');
      await this.buildNode(expHeader, 'CAREER TRAJECTORY HEADER', 3, 800);

      const expRows = Array.from(document.querySelectorAll('.experience-row'));
      if (expRows[0]) await this.buildNode(expRows[0], 'PT FUJI SEAT INDONESIA // HSE STAFF', 0, 1200);
      if (expRows[1]) await this.buildNode(expRows[1], 'PT PIONIR TEKNO GEMILANG', 1, 1000);

      const certsHeader = document.querySelector('#certifications .section-header');
      await this.buildNode(certsHeader, 'OFFICIAL K3 LICENSES', 2, 600);

      const certCards = Array.from(document.querySelectorAll('.cert-card'));
      for (let k = 0; k < certCards.length; k++) {
        if (this.isSkipping) return;
        await this.buildNode(certCards[k], `CERTIFICATION 0${k + 1}`, (k + 3) % 5, 400);
      }

      // ----------------------------------------------------------------------
      // STEP 7 (35.8s - 38.6s): CONTACT & MUSIC ATTRIBUTION (FOOTER TERBAWAH!)
      // ----------------------------------------------------------------------
      if (this.hudText) {
        this.hudText.textContent = '⚡ SWARM: REACHING FOOTER // PIXABAY SOUNDTRACK CREDIT...';
      }

      const contactHeader = document.querySelector('#contact .section-header');
      const contactChannels = document.querySelector('.contact-channels');
      const consoleForm = document.querySelector('.transmission-console');
      const siteFooter = document.querySelector('.site-footer');

      await this.buildNode(contactHeader, 'TRANSMISSION FREQUENCY', 0, 700);
      await this.buildNode(contactChannels, 'DIRECT CHANNELS (WA & EMAIL)', 1, 900);
      await this.buildNode(consoleForm, 'TRANSMISSION CONSOLE', 2, 1100);
      await this.buildNode(siteFooter, 'APEX BASE // PIXABAY SOUNDTRACK', 3, 1100);

      if (this.isSkipping) return;

      // ----------------------------------------------------------------------
      // STEP 8 (38.6s - 41.0s): TERBAWAH SELESAI -> MAJESTIC RETURN TO TOP APEX!
      // ----------------------------------------------------------------------
      if (this.hudText) {
        this.hudText.innerHTML = '<span style="color:#10b981; font-size:14px;">✓</span> 100% ASSEMBLED IN 41s // RETURNING TO TOP APEX...';
      }

      // Cursors form an upward chevron escort formation
      const midX = window.innerWidth / 2;
      const midY = window.innerHeight / 2;
      this.cursors.forEach((cur, idx) => {
        this.setCursorPos(cur, midX + (idx - 2) * 50, midY, 350);
      });

      await new Promise(r => setTimeout(r, 200));

      // Majestic return to apex (top 0, 0) in 2200ms!
      await this.smoothScrollTo(0, 2200);

      // ----------------------------------------------------------------------
      // STEP 9 (41.0s): REBUILD COMPLETE! CELEBRATION & DISPERSE
      // ----------------------------------------------------------------------
      document.body.classList.remove('is-blank-slate');
      playRebuildComplete();

      if (this.hudText) {
        this.hudText.innerHTML = '<span style="color:#10b981; font-size:14px;">✓</span> 41S BEAT REBUILD COMPLETE // ALL SYSTEMS OPERATIONAL';
      }

      // Cursors celebrate and disperse outward
      const exitPoints = [
        { x: -140, y: -140 },
        { x: w + 140, y: -140 },
        { x: -140, y: h + 140 },
        { x: w + 140, y: h + 140 },
        { x: w / 2, y: h + 180 }
      ];

      this.cursors.forEach((cur, idx) => {
        this.setCursorPos(cur, exitPoints[idx].x, exitPoints[idx].y, 600);
        setTimeout(() => {
          cur.style.opacity = '0';
        }, 350);
      });

      setTimeout(() => {
        if (this.hud) this.hud.classList.remove('show');
        this.isBusy = false;
      }, 3000);
    }
  }

  // ==========================================================================
  // 12. INITIALIZATION & ZERO-CLICK DIRECT AUTOPLAY ON PAGE LOAD
  // ==========================================================================
  const engine = new SwarmRebuildEngine();

  // Automatic kick-off at 0-second mark
  setTimeout(() => {
    engine.run(false);
  }, 100);
});
