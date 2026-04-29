<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Portfolio CV for Wafi Zubairi, an IT networking, systems, and security graduate.">
<title>Wafi Zubairi | IT Network & Security Portfolio</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=JetBrains+Mono:wght@500;700&display=swap" rel="stylesheet">
<style>
  *, *::before, *::after { box-sizing: border-box; }
  :root {
    --ink: #182124;
    --muted: #657174;
    --paper: #f7f3ea;
    --surface: #fffdf7;
    --line: #ddd5c8;
    --teal: #0f766e;
    --teal-dark: #174842;
    --coral: #d95f45;
    --gold: #d6a13d;
    --soft: #edf5f1;
    --shadow: 0 24px 70px rgba(24, 33, 36, 0.16);
  }
  html { scroll-behavior: smooth; }
  body {
    margin: 0;
    background: var(--paper);
    color: var(--ink);
    font-family: Inter, Arial, sans-serif;
    line-height: 1.6;
    overflow-x: hidden;
  }
  body::before {
    content: '';
    position: fixed;
    inset: 0;
    pointer-events: none;
    background-image: linear-gradient(rgba(24,33,36,0.035) 1px, transparent 1px), linear-gradient(90deg, rgba(24,33,36,0.035) 1px, transparent 1px);
    background-size: 44px 44px;
    mask-image: linear-gradient(to bottom, black, transparent 78%);
  }
  a { color: inherit; text-decoration: none; }
  img { display: block; max-width: 100%; }
  .skip-link { position: absolute; left: -999px; top: 12px; z-index: 1000; background: var(--ink); color: #fff; padding: 10px 14px; border-radius: 8px; }
  .skip-link:focus { left: 12px; }
  .site-nav {
    position: sticky;
    top: 0;
    z-index: 50;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 24px;
    padding: 16px clamp(18px, 5vw, 72px);
    background: rgba(247, 243, 234, 0.9);
    border-bottom: 1px solid rgba(221, 213, 200, 0.85);
    backdrop-filter: blur(18px);
  }
  .brand { display: inline-flex; align-items: center; gap: 10px; font-weight: 800; }
  .brand-mark { width: 30px; height: 30px; border-radius: 8px; background: linear-gradient(135deg, var(--teal) 0 48%, var(--gold) 48% 62%, var(--coral) 62%); }
  .nav-links { display: flex; align-items: center; gap: 6px; list-style: none; margin: 0; padding: 0; }
  .nav-links a { display: inline-flex; border-radius: 8px; color: var(--muted); font-size: 0.86rem; font-weight: 800; padding: 9px 11px; }
  .nav-links a:hover, .nav-links a:focus-visible { background: rgba(15,118,110,0.08); color: var(--teal-dark); }
  .menu-button { display: none; width: 42px; height: 42px; border: 1px solid var(--line); border-radius: 8px; background: var(--surface); cursor: pointer; }
  .menu-button span { display: block; width: 18px; height: 2px; margin: 4px auto; background: var(--ink); }
  main { position: relative; z-index: 1; }
  .hero {
    display: grid;
    grid-template-columns: minmax(0, 1fr) minmax(300px, 430px);
    gap: clamp(34px, 6vw, 82px);
    align-items: center;
    min-height: calc(100vh - 66px);
    padding: clamp(48px, 7vw, 96px) clamp(18px, 5vw, 72px) clamp(34px, 6vw, 72px);
  }
  .eyebrow { margin: 0 0 12px; color: var(--teal); font-family: 'JetBrains Mono', monospace; font-size: 0.76rem; font-weight: 800; letter-spacing: 0.1em; text-transform: uppercase; }
  h1, h2, h3, p { overflow-wrap: anywhere; }
  h1 { max-width: 12ch; margin: 0; font-size: clamp(3rem, 7.4vw, 6.7rem); line-height: 0.92; letter-spacing: 0; }
  h2 { margin: 0; font-size: clamp(2rem, 4.6vw, 4.1rem); line-height: 1; letter-spacing: 0; }
  h3 { margin: 0; font-size: 1rem; }
  .hero-text { max-width: 66ch; margin: 24px 0 0; color: var(--muted); font-size: clamp(1rem, 1.6vw, 1.15rem); }
  .hero-actions { display: flex; flex-wrap: wrap; gap: 12px; margin-top: 30px; }
  .button { display: inline-flex; align-items: center; justify-content: center; gap: 10px; min-height: 46px; border: 1px solid transparent; border-radius: 8px; cursor: pointer; font: inherit; font-weight: 800; padding: 12px 18px; }
  .button.primary { background: var(--ink); color: #fff; }
  .button.secondary { background: var(--surface); border-color: var(--line); color: var(--ink); }
  .button:hover { transform: translateY(-1px); }
  .facts { display: grid; grid-template-columns: repeat(3, minmax(0, 1fr)); gap: 10px; margin-top: 34px; }
  .fact, .card, .skill-card, .profile-card { border: 1px solid var(--line); border-radius: 8px; background: rgba(255, 253, 247, 0.78); }
  .fact { padding: 14px; }
  .fact span { display: block; color: var(--muted); font-family: 'JetBrains Mono', monospace; font-size: 0.68rem; font-weight: 800; letter-spacing: 0.08em; text-transform: uppercase; }
  .fact strong { display: block; margin-top: 5px; font-size: 0.95rem; }
  .profile-card { position: relative; overflow: hidden; padding: 18px; box-shadow: var(--shadow); background: var(--surface); }
  .profile-card::before { content: ''; position: absolute; inset: 0; background: linear-gradient(135deg, rgba(15,118,110,0.16), transparent 42%), linear-gradient(315deg, rgba(217,95,69,0.14), transparent 45%); pointer-events: none; }
  .portrait { position: relative; border-radius: 8px; overflow: hidden; aspect-ratio: 4 / 5; background: var(--soft); }
  .portrait img { width: 100%; height: 100%; object-fit: cover; object-position: center top; }
  .availability { position: relative; display: flex; align-items: center; gap: 10px; margin-top: 14px; border-radius: 8px; background: var(--soft); padding: 12px 14px; font-weight: 800; }
  .status-dot { width: 10px; height: 10px; flex: 0 0 10px; border-radius: 999px; background: #19a566; box-shadow: 0 0 0 5px rgba(25,165,102,0.16); }
  .section { padding: clamp(58px, 8vw, 108px) clamp(18px, 5vw, 72px); }
  .band { background: rgba(237, 245, 241, 0.82); }
  .section-heading { max-width: 820px; margin-bottom: 34px; }
  .summary-grid { display: grid; grid-template-columns: minmax(0, 0.85fr) minmax(280px, 0.55fr); gap: clamp(18px, 4vw, 44px); align-items: start; }
  .summary-copy { color: var(--muted); font-size: 1rem; }
  .summary-copy p { margin: 0 0 16px; }
  .highlight-list { display: grid; gap: 10px; }
  .highlight { display: flex; gap: 12px; align-items: flex-start; padding: 14px; border: 1px solid var(--line); border-radius: 8px; background: var(--surface); }
  .highlight::before { content: ''; width: 9px; height: 9px; flex: 0 0 9px; margin-top: 8px; border-radius: 999px; background: var(--coral); box-shadow: 0 0 0 5px rgba(217,95,69,0.12); }
  .split { display: grid; grid-template-columns: minmax(0, 1fr) minmax(300px, 390px); gap: clamp(24px, 5vw, 58px); align-items: start; }
  .timeline { display: grid; gap: 14px; }
  .timeline-item { display: grid; grid-template-columns: minmax(132px, 0.24fr) minmax(0, 1fr); gap: 22px; border-top: 1px solid rgba(24,33,36,0.18); padding: 22px 0; }
  .timeline-period { color: var(--teal); font-family: 'JetBrains Mono', monospace; font-size: 0.78rem; font-weight: 800; }
  .timeline-place { margin-top: 3px; color: var(--muted); font-weight: 700; }
  .timeline-desc { margin: 9px 0 0; color: var(--muted); }
  .tags { display: flex; flex-wrap: wrap; gap: 8px; margin-top: 13px; }
  .tag { border: 1px solid rgba(15,118,110,0.2); border-radius: 999px; background: rgba(15,118,110,0.08); color: var(--teal-dark); font-size: 0.8rem; font-weight: 800; padding: 5px 10px; }
  .skill-grid, .project-grid { display: grid; grid-template-columns: repeat(2, minmax(0, 1fr)); gap: 14px; }
  .skill-card, .card { padding: 20px; }
  .skill-label { margin-bottom: 12px; color: var(--teal); font-family: 'JetBrains Mono', monospace; font-size: 0.74rem; font-weight: 800; letter-spacing: 0.08em; text-transform: uppercase; }
  .skill-tags { display: flex; flex-wrap: wrap; gap: 8px; }
  .skill-tags span { border-radius: 8px; background: var(--soft); color: var(--teal-dark); font-size: 0.88rem; font-weight: 700; padding: 7px 10px; }
  .education-card { position: sticky; top: 96px; }
  .education-card .card + .card { margin-top: 12px; }
  .card p { margin: 8px 0 0; color: var(--muted); }
  .award-list { margin: 12px 0 0; padding: 0; list-style: none; display: grid; gap: 9px; color: var(--muted); }
  .award-list li { padding-left: 18px; position: relative; }
  .award-list li::before { content: ''; position: absolute; left: 0; top: 0.7em; width: 7px; height: 7px; border-radius: 999px; background: var(--gold); }
  .project-grid { grid-template-columns: repeat(3, minmax(0, 1fr)); }
  .project-card { display: flex; flex-direction: column; min-height: 260px; }
  .project-index { width: 42px; height: 42px; display: grid; place-items: center; border-radius: 8px; background: var(--gold); color: var(--ink); font-weight: 900; }
  .project-card h3 { margin-top: 22px; font-size: 1.15rem; }
  .project-status { margin-top: auto; padding-top: 18px; color: var(--teal); font-family: 'JetBrains Mono', monospace; font-size: 0.72rem; font-weight: 800; letter-spacing: 0.08em; text-transform: uppercase; }
  .empty-state { grid-column: 1 / -1; border: 1px dashed var(--line); border-radius: 8px; padding: 30px; color: var(--muted); text-align: center; background: var(--surface); }
  .contact { display: grid; grid-template-columns: minmax(0, 0.9fr) minmax(280px, 0.55fr); gap: clamp(24px, 6vw, 70px); align-items: center; background: var(--ink); color: #fff; }
  .contact .eyebrow { color: var(--gold); }
  .contact p { max-width: 62ch; color: rgba(255,255,255,0.72); }
  .contact-links { display: grid; gap: 10px; }
  .contact-link { display: flex; align-items: center; justify-content: space-between; gap: 16px; border: 1px solid rgba(255,255,255,0.16); border-radius: 8px; padding: 15px 16px; font-weight: 800; }
  .contact-link span:last-child { color: rgba(255,255,255,0.68); text-align: right; }
  .contact-link:hover { background: rgba(255,255,255,0.08); }
  footer { position: relative; z-index: 1; display: flex; justify-content: space-between; gap: 16px; padding: 22px clamp(18px, 5vw, 72px); color: var(--muted); font-size: 0.9rem; }
  @media (max-width: 900px) {
    .hero, .summary-grid, .split, .contact { grid-template-columns: 1fr; }
    .hero { min-height: auto; }
    .project-grid { grid-template-columns: 1fr; }
    .education-card { position: static; }
  }
  @media (max-width: 700px) {
    .nav-links { position: absolute; inset: 66px 18px auto; display: none; flex-direction: column; align-items: stretch; border: 1px solid var(--line); border-radius: 8px; background: var(--surface); padding: 8px; box-shadow: var(--shadow); }
    .nav-links.open { display: flex; }
    .menu-button { display: block; }
    .facts, .timeline-item, .skill-grid { grid-template-columns: 1fr; }
    h1 { max-width: 11ch; }
    footer { flex-direction: column; }
  }
  @media print {
    .site-nav, .hero-actions, .profile-card, footer { display: none; }
    body { background: #fff; color: #000; }
    body::before { display: none; }
    .hero, .section, .contact { display: block; min-height: auto; padding: 22px 0; background: #fff; color: #000; }
    h1 { max-width: none; font-size: 42px; }
  }
</style>
</head>
<body>
<a href="#main" class="skip-link">Skip to content</a>
<nav class="site-nav" aria-label="Primary navigation">
  <a class="brand" href="#main" aria-label="Wafi Zubairi home"><span class="brand-mark" aria-hidden="true"></span><span>Wafi Zubairi</span></a>
  <button class="menu-button" type="button" aria-label="Open menu" aria-expanded="false"><span></span><span></span><span></span></button>
  <ul class="nav-links">
    <li><a href="#profile">Profile</a></li>
    <li><a href="#experience">Experience</a></li>
    <li><a href="#skills">Skills</a></li>
    <li><a href="#projects">Projects</a></li>
    <li><a href="#contact">Contact</a></li>
  </ul>
</nav>

<main id="main">
  <section class="hero" aria-labelledby="hero-title">
    <div>
      <p class="eyebrow">IT Network & Security Portfolio</p>
      <h1 id="hero-title">Nur Iman Wafi Mohd Zubairi</h1>
      <p class="hero-text">Aspiring Junior Network Technician, IT Support Executive, and Junior System Administrator with a 4.00 CGPA Diploma in Information Technology and hands-on QA, technical support, web, and system development experience.</p>
      <div class="hero-actions">
        <a href="#contact" class="button primary">Contact Me</a>
        <button class="button secondary" type="button" id="printButton">Save CV as PDF</button>
      </div>
      <div class="facts" aria-label="Quick facts">
        <div class="fact"><span>CGPA</span><strong>4.00 / 4.00</strong></div>
        <div class="fact"><span>Focus</span><strong>Network & IT Support</strong></div>
        <div class="fact"><span>Strength</span><strong>QA, UAT & Troubleshooting</strong></div>
      </div>
    </div>
    <aside class="profile-card" aria-label="Profile photo and availability">
      <div class="portrait"><img src="{{ asset('images/wafi.png') }}" alt="Portrait of Wafi Zubairi"></div>
      <div class="availability"><span class="status-dot" aria-hidden="true"></span><span>Targeting junior network, IT support, and system administration roles</span></div>
    </aside>
  </section>

  <section class="section band" id="profile">
    <div class="section-heading">
      <p class="eyebrow">Profile</p>
      <h2>Practical IT Foundations With A Security Mindset</h2>
    </div>
    <div class="summary-grid">
      <div class="summary-copy">
        <p>I am a 4.00 CGPA Diploma in Information Technology graduate with a vocational foundation in Computer Systems and Networking. My training covers cybersecurity, network configuration, Ubuntu and Windows server management, database management, web development, and hardware maintenance.</p>
        <p>Through my internship at HPCS Sdn. Bhd., I am gaining real software-house experience in QA testing, User Acceptance Test documentation, user manual preparation, Excel-based data analysis, technical support, and bug tracking with development teams.</p>
      </div>
      <div class="highlight-list" aria-label="Portfolio highlights">
        <div class="highlight">Diploma in Information Technology with 4.00 CGPA and SVM Computer Systems & Networking with 3.86 CGPA.</div>
        <div class="highlight">Cisco Networking Academy training in IT Essentials, Networking Basics, and CCNA: Introduction to Networks.</div>
        <div class="highlight">Built Navi-KV, a Flask and JavaScript campus navigation system with UAT, deployment, database integration, and connectivity work.</div>
      </div>
    </div>
  </section>

  <section class="section split" id="experience">
    <div>
      <div class="section-heading">
        <p class="eyebrow">Experience</p>
        <h2>Work & Training</h2>
      </div>
      <div class="timeline">
        <article class="timeline-item">
          <div><div class="timeline-period">Mar 2026 - Jul 2026</div><div class="timeline-place">HPCS Sdn. Bhd.</div></div>
          <div>
            <h3>Quality Assurance (QA) & Technical Support Intern</h3>
            <p class="timeline-desc">Responsible for comprehensive system testing to identify bugs and errors before launch, preparing UAT documents and user manuals, extracting and analyzing data with Microsoft Excel, and collaborating with developers to monitor bug-fix progress.</p>
            <div class="tags"><span class="tag">QA Testing</span><span class="tag">UAT Documentation</span><span class="tag">Technical Support</span><span class="tag">Excel Analysis</span></div>
          </div>
        </article>
        <article class="timeline-item">
          <div><div class="timeline-period">2024 - 2026</div><div class="timeline-place">Kolej Vokasional Sungai Buloh</div></div>
          <div>
            <h3>Diploma in Information Technology</h3>
            <p class="timeline-desc">Completed coursework in cybersecurity, networking configuration, Ubuntu and Windows server management, database management, and web development. Graduated with a CGPA of 4.00/4.00.</p>
            <div class="tags"><span class="tag">Diploma</span><span class="tag">CGPA 4.00</span><span class="tag">Server Management</span><span class="tag">Cybersecurity</span></div>
          </div>
        </article>
        <article class="timeline-item">
          <div><div class="timeline-period">2022 - 2024</div><div class="timeline-place">Kolej Vokasional Sungai Buloh</div></div>
          <div>
            <h3>Sijil Vokasional Malaysia, Computer Systems & Networking</h3>
            <p class="timeline-desc">Built a practical foundation in hardware maintenance, network cabling, Cisco configuration, and system troubleshooting. Graduated with a CGPA of 3.86/4.00.</p>
            <div class="tags"><span class="tag">SVM</span><span class="tag">CGPA 3.86</span><span class="tag">Cisco Configuration</span><span class="tag">Troubleshooting</span></div>
          </div>
        </article>
      </div>
    </div>
    <aside class="education-card" aria-label="Education and certifications">
      <div class="card">
        <p class="eyebrow">Education</p>
        <h3>Diploma in Information Technology</h3>
        <p>Kolej Vokasional Sungai Buloh, 2024 - 2026. CGPA: 4.00/4.00.</p>
      </div>
      <div class="card">
        <p class="eyebrow">Cisco Academy</p>
        <h3>Networking Certifications</h3>
        <ul class="award-list">
          <li>IT Essentials</li>
          <li>Networking Basics</li>
          <li>CCNA: Introduction to Networks</li>
        </ul>
      </div>
      <div class="card">
        <p class="eyebrow">Awards</p>
        <h3>Innovation & Leadership</h3>
        <ul class="award-list">
          <li>International Innovation ARSVOT Malaysia 2025, Gold</li>
          <li>Piala Pengarah Hari TVET KVSB 2025, Gold</li>
          <li>NIICe2022, Silver</li>
          <li>Student Representative Council Exco appointment, 2025/2026</li>
        </ul>
      </div>
    </aside>
  </section>

  <section class="section band" id="skills">
    <div class="section-heading">
      <p class="eyebrow">Capabilities</p>
      <h2>Technical Skills</h2>
    </div>
    <div class="skill-grid">
      <div class="skill-card"><div class="skill-label">Networking</div><div class="skill-tags"><span>Cisco Packet Tracer</span><span>Router/Switch Configuration</span><span>TCP/IP</span><span>LAN/WAN</span><span>Network Cabling</span><span>DNS</span></div></div>
      <div class="skill-card"><div class="skill-label">Systems & Security</div><div class="skill-tags"><span>Ubuntu Server</span><span>Windows Server</span><span>Linux Mint</span><span>Kali Linux</span><span>NMAP</span><span>Basic Penetration Testing</span><span>Network Security</span></div></div>
      <div class="skill-card"><div class="skill-label">Development</div><div class="skill-tags"><span>HTML</span><span>CSS</span><span>JavaScript</span><span>Python</span><span>Flask</span><span>Java</span><span>SQL</span><span>MySQL</span><span>WordPress</span><span>Joomla</span></div></div>
      <div class="skill-card"><div class="skill-label">Support & QA</div><div class="skill-tags"><span>UAT Documents</span><span>User Manuals</span><span>Bug Tracking</span><span>Microsoft Excel</span><span>Data Analysis</span><span>Technical Support</span><span>PC Assembly</span><span>Server Maintenance</span></div></div>
    </div>
  </section>

  <section class="section" id="projects">
    <div class="section-heading">
      <p class="eyebrow">Projects</p>
      <h2>Selected Work</h2>
    </div>
    <div class="project-grid">
      @forelse($projects as $project)
        <article class="card project-card">
          <span class="project-index">{{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}</span>
          <h3>{{ $project->name }}</h3>
          <p>{{ $project->description }}</p>
          <p>{{ $project->tech_stack }}</p>
          <div class="project-status">{{ $project->status }}</div>
        </article>
      @empty
        <div class="empty-state">No projects are available yet. Run php artisan migrate --seed to publish the project list.</div>
      @endforelse
    </div>
  </section>

  <section class="section contact" id="contact">
    <div>
      <p class="eyebrow">Contact</p>
      <h2>Ready To Support Real IT Teams</h2>
      <p>I am open to junior network technician, IT support executive, junior system administrator, QA support, and technical support opportunities where I can apply my networking, systems, testing, and troubleshooting foundation.</p>
    </div>
    <div class="contact-links">
      <a class="contact-link" href="mailto:emanwifi123@gmail.com"><span>Email</span><span>emanwifi123@gmail.com</span></a>
      <a class="contact-link" href="https://www.linkedin.com/in/wafi-zubairi-44a930255/" target="_blank" rel="noopener noreferrer"><span>LinkedIn</span><span>Wafi Zubairi</span></a>
      <a class="contact-link" href="https://github.com/wafizubairi" target="_blank" rel="noopener noreferrer"><span>GitHub</span><span>wafizubairi</span></a>
    </div>
  </section>
</main>

<footer>
  <span>Wafi Zubairi</span>
  <span>CV Portfolio &copy; {{ date('Y') }}</span>
</footer>

<script>
  const menuButton = document.querySelector('.menu-button');
  const navLinks = document.querySelector('.nav-links');
  const printButton = document.getElementById('printButton');

  menuButton.addEventListener('click', () => {
    const isOpen = navLinks.classList.toggle('open');
    menuButton.setAttribute('aria-expanded', String(isOpen));
  });

  navLinks.addEventListener('click', () => {
    navLinks.classList.remove('open');
    menuButton.setAttribute('aria-expanded', 'false');
  });

  printButton.addEventListener('click', () => window.print());
</script>
</body>
</html>
