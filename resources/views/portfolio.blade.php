<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Wafi Zubairi — IT Network & Security</title>
<link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=DM+Mono:wght@400;500&family=Manrope:wght@400;500;600&display=swap" rel="stylesheet">
<style>
  *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
  :root {
    --navy: #0b1929; --navy-mid: #112236; --navy-light: #1a3450;
    --accent: #3b82f6; --accent-light: #60a5fa; --accent-dim: rgba(59,130,246,0.12);
    --white: #f8fafc; --white-dim: rgba(248,250,252,0.7); --white-faint: rgba(248,250,252,0.1);
    --muted: rgba(248,250,252,0.45); --border: rgba(59,130,246,0.2); --card-bg: rgba(17,34,54,0.6);
  }
  html { scroll-behavior: smooth; }
  body { font-family: 'Manrope', sans-serif; background: var(--navy); color: var(--white); min-height: 100vh; overflow-x: hidden; }
  body::before { content: ''; position: fixed; inset: 0; background-image: linear-gradient(rgba(59,130,246,0.04) 1px, transparent 1px), linear-gradient(90deg, rgba(59,130,246,0.04) 1px, transparent 1px); background-size: 48px 48px; pointer-events: none; z-index: 0; }
  nav { position: fixed; top: 0; left: 0; right: 0; z-index: 100; display: flex; justify-content: space-between; align-items: center; padding: 1rem 3rem; background: rgba(11,25,41,0.85); backdrop-filter: blur(16px); border-bottom: 1px solid var(--border); }
  .nav-logo { font-family: 'DM Mono', monospace; font-size: 0.85rem; color: var(--accent-light); letter-spacing: 0.08em; }
  .nav-links { display: flex; gap: 2rem; list-style: none; }
  .nav-links a { text-decoration: none; font-size: 0.8rem; font-weight: 500; color: var(--muted); letter-spacing: 0.06em; text-transform: uppercase; transition: color 0.2s; }
  .nav-links a:hover { color: var(--accent-light); }
  section { position: relative; z-index: 1; }
  #hero { min-height: 100vh; display: flex; flex-direction: column; justify-content: center; padding: 7rem 3rem 4rem; max-width: 900px; margin: 0 auto; }
  .hero-tag { font-family: 'DM Mono', monospace; font-size: 0.75rem; color: var(--accent); letter-spacing: 0.15em; text-transform: uppercase; margin-bottom: 1.5rem; opacity: 0; animation: fadeUp 0.6s 0.2s ease forwards; }
  .hero-name { font-family: 'DM Serif Display', serif; font-size: clamp(2rem, 5vw, 4.5rem); ... }
  .hero-name span { color: var(--accent-light); font-style: italic; }
  .hero-tagline { font-family: 'DM Mono', monospace; font-size: 0.75rem; color: var(--accent-light); letter-spacing: 0.06em; margin-bottom: 2rem; opacity: 0; animation: fadeUp 0.7s 0.5s ease forwards; }
  .hero-bio { font-size: 1rem; line-height: 1.8; color: var(--white-dim); max-width: 580px; margin-bottom: 2.5rem; opacity: 0; animation: fadeUp 0.7s 0.65s ease forwards; }
  .hero-cta { display: flex; gap: 1rem; flex-wrap: wrap; opacity: 0; animation: fadeUp 0.7s 0.8s ease forwards; }
  .btn-primary { display: inline-block; padding: 0.75rem 1.75rem; background: var(--accent); color: #fff; text-decoration: none; font-size: 0.85rem; font-weight: 600; letter-spacing: 0.04em; border-radius: 6px; transition: background 0.2s, transform 0.15s; }
  .btn-primary:hover { background: var(--accent-light); transform: translateY(-2px); }
  .btn-outline { display: inline-block; padding: 0.75rem 1.75rem; border: 1px solid var(--border); color: var(--white-dim); text-decoration: none; font-size: 0.85rem; font-weight: 500; border-radius: 6px; transition: border-color 0.2s, color 0.2s, transform 0.15s; }
  .btn-outline:hover { border-color: var(--accent-light); color: var(--accent-light); transform: translateY(-2px); }
  .scroll-hint { margin-top: 4rem; display: flex; align-items: center; gap: 0.75rem; color: var(--muted); font-size: 0.75rem; letter-spacing: 0.08em; text-transform: uppercase; opacity: 0; animation: fadeUp 0.7s 1s ease forwards; }
  .scroll-line { width: 40px; height: 1px; background: var(--border); position: relative; overflow: hidden; }
  .scroll-line::after { content: ''; position: absolute; top: 0; left: -100%; width: 100%; height: 100%; background: var(--accent); animation: scrollAnim 2s 1.5s ease infinite; }
  .content { max-width: 900px; margin: 0 auto; padding: 0 3rem 6rem; }
  .section-header { display: flex; align-items: center; gap: 1rem; margin-bottom: 2.5rem; padding-top: 5rem; }
  .section-num { font-family: 'DM Mono', monospace; font-size: 0.7rem; color: var(--accent); letter-spacing: 0.12em; }
  .section-title { font-family: 'DM Serif Display', serif; font-size: 2rem; color: var(--white); }
  .section-line { flex: 1; height: 1px; background: var(--border); }
  .skills-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 1rem; }
  .skill-group { background: var(--card-bg); border: 1px solid var(--border); border-radius: 10px; padding: 1.25rem; backdrop-filter: blur(8px); transition: border-color 0.2s, transform 0.2s; }
  .skill-group:hover { border-color: var(--accent); transform: translateY(-3px); }
  .skill-group-label { font-family: 'DM Mono', monospace; font-size: 0.65rem; color: var(--accent); letter-spacing: 0.12em; text-transform: uppercase; margin-bottom: 0.75rem; }
  .skill-tags { display: flex; flex-wrap: wrap; gap: 0.4rem; }
  .skill-tag { font-size: 0.75rem; color: var(--white-dim); background: var(--white-faint); border: 1px solid rgba(248,250,252,0.1); border-radius: 4px; padding: 0.25rem 0.6rem; transition: background 0.2s, color 0.2s; }
  .skill-group:hover .skill-tag { background: var(--accent-dim); color: var(--accent-light); border-color: var(--border); }
  .timeline { position: relative; padding-left: 2rem; }
  .timeline::before { content: ''; position: absolute; left: 0; top: 0; bottom: 0; width: 1px; background: linear-gradient(to bottom, var(--accent), transparent); }
  .timeline-item { position: relative; margin-bottom: 2.5rem; opacity: 0; transform: translateX(-10px); transition: opacity 0.5s, transform 0.5s; }
  .timeline-item.visible { opacity: 1; transform: none; }
  .timeline-dot { position: absolute; left: -2rem; top: 0.35rem; width: 9px; height: 9px; background: var(--accent); border-radius: 50%; border: 2px solid var(--navy); box-shadow: 0 0 0 3px var(--accent-dim); }
  .timeline-period { font-family: 'DM Mono', monospace; font-size: 0.7rem; color: var(--accent); letter-spacing: 0.1em; margin-bottom: 0.35rem; }
  .timeline-role { font-size: 1.05rem; font-weight: 600; color: var(--white); margin-bottom: 0.2rem; }
  .timeline-place { font-size: 0.85rem; color: var(--muted); margin-bottom: 0.6rem; }
  .timeline-desc { font-size: 0.9rem; color: var(--white-dim); line-height: 1.7; }
  .timeline-badge { display: inline-block; margin-top: 0.6rem; font-size: 0.7rem; font-family: 'DM Mono', monospace; color: var(--accent-light); background: var(--accent-dim); border: 1px solid var(--border); border-radius: 4px; padding: 0.2rem 0.6rem; letter-spacing: 0.06em; margin-right: 0.4rem; }
  .projects-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 1.25rem; }
  .project-card { background: var(--card-bg); border: 1px solid var(--border); border-radius: 12px; padding: 1.5rem; backdrop-filter: blur(8px); transition: border-color 0.2s, transform 0.2s; position: relative; overflow: hidden; }
  .project-card::before { content: ''; position: absolute; top: 0; left: 0; right: 0; height: 2px; background: linear-gradient(90deg, var(--accent), transparent); transform: scaleX(0); transform-origin: left; transition: transform 0.3s; }
  .project-card:hover { border-color: var(--accent); transform: translateY(-4px); }
  .project-card:hover::before { transform: scaleX(1); }
  .project-name { font-size: 1rem; font-weight: 600; color: var(--white); margin-bottom: 0.5rem; }
  .project-desc { font-size: 0.85rem; color: var(--white-dim); line-height: 1.65; }
  .project-status { margin-top: 1rem; font-family: 'DM Mono', monospace; font-size: 0.65rem; letter-spacing: 0.1em; color: var(--accent); text-transform: uppercase; }
  .project-tech { margin-top: 0.5rem; font-size: 0.75rem; color: var(--muted); }
  .project-empty { padding: 2.5rem 1.5rem; border: 1px dashed var(--border); border-radius: 12px; color: var(--white-dim); font-size: 0.95rem; background: rgba(255,255,255,0.02); grid-column: 1/-1; text-align: center; }
  .contact-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 1rem; }
  .contact-item { background: var(--card-bg); border: 1px solid var(--border); border-radius: 10px; padding: 1.25rem; display: flex; align-items: center; gap: 1rem; text-decoration: none; transition: border-color 0.2s, transform 0.2s; backdrop-filter: blur(8px); }
  .contact-item:hover { border-color: var(--accent); transform: translateY(-2px); }
  .contact-icon { width: 38px; height: 38px; background: var(--accent-dim); border-radius: 8px; display: flex; align-items: center; justify-content: center; flex-shrink: 0; }
  .contact-icon svg { width: 16px; height: 16px; stroke: var(--accent-light); fill: none; stroke-width: 1.5; }
  .contact-label { font-size: 0.7rem; color: var(--muted); margin-bottom: 0.2rem; text-transform: uppercase; letter-spacing: 0.08em; }
  .contact-value { font-size: 0.85rem; color: var(--white); font-weight: 500; }
  footer { text-align: center; padding: 3rem; color: var(--muted); font-family: 'DM Mono', monospace; font-size: 0.7rem; letter-spacing: 0.08em; border-top: 1px solid var(--border); position: relative; z-index: 1; }
  @keyframes fadeUp { from { opacity: 0; transform: translateY(16px); } to { opacity: 1; transform: translateY(0); } }
  @keyframes scrollAnim { from { left: -100%; } to { left: 100%; } }
  #cursor { position: fixed; width: 6px; height: 6px; background: var(--accent); border-radius: 50%; pointer-events: none; z-index: 9999; transition: transform 0.1s; transform: translate(-50%, -50%); }
  #cursor-ring { position: fixed; width: 28px; height: 28px; border: 1px solid rgba(59,130,246,0.4); border-radius: 50%; pointer-events: none; z-index: 9998; transform: translate(-50%, -50%); transition: left 0.12s ease, top 0.12s ease, width 0.2s, height 0.2s, opacity 0.2s; }
  @media (max-width: 640px) { nav { padding: 1rem 1.5rem; } .nav-links { gap: 1.2rem; } #hero, .content { padding-left: 1.5rem; padding-right: 1.5rem; } .hero-name { font-size: 2.8rem; } }
</style>
</head>
<body>
<div id="cursor"></div>
<div id="cursor-ring"></div>

<nav>
  <div class="nav-logo">wafi.zubairi</div>
  <ul class="nav-links">
    <li><a href="#about">About</a></li>
    <li><a href="#skills">Skills</a></li>
    <li><a href="#experience">Experience</a></li>
    <li><a href="#projects">Projects</a></li>
    <li><a href="#contact">Contact</a></li>
  </ul>
</nav>

<section id="about">
  <div id="hero">
    <div style="display:flex; align-items:center; gap:2rem; flex-wrap:nowrap; margin-bottom:2rem;">
      <img src="{{ asset('images/wafi.png') }}" alt="Wafi Zubairi"
        style="width:150px; height:150px; object-fit:cover; object-position: center top;
        border-radius:50%; border:2px solid var(--border);
        box-shadow:0 0 0 6px var(--accent-dim);">
      <div>
        <p class="hero-tag">// Available for opportunities</p>
        <h1 class="hero-name">Nur Iman <span>Wafi</span><br>Zubairi</h1>
        <p class="hero-tagline">Network & Systems Enthusiast &nbsp;·&nbsp; IT Security &nbsp;·&nbsp; Fresh Graduate</p>
      </div>
    </div>
    <p class="hero-bio">A driven IT graduate with a passion for networking, systems infrastructure, and security. Armed with a Diploma in Information Technology and a Malaysian Skills Certificate Level 3, I'm currently gaining hands-on experience before pursuing a Bachelor's degree — hungry to learn, adapt, and contribute to any IT team that values growth.</p>
    <div class="hero-cta">
      <a href="#contact" class="btn-primary">Get In Touch</a>
      <a href="#skills" class="btn-outline">View My Skills</a>
    </div>
    <div class="scroll-hint">
      <div class="scroll-line"></div>
      <span>Scroll to explore</span>
    </div>
  </div>
</section>

<div class="content">

  <section id="skills">
    <div class="section-header">
      <span class="section-num">01</span>
      <h2 class="section-title">Skills</h2>
      <div class="section-line"></div>
    </div>
    <div class="skills-grid">
      <div class="skill-group">
        <div class="skill-group-label">Networking</div>
        <div class="skill-tags">
          <span class="skill-tag">TCP/IP</span><span class="skill-tag">DNS</span>
          <span class="skill-tag">Network Admin</span><span class="skill-tag">Network Config</span>
          <span class="skill-tag">Network Cabling</span><span class="skill-tag">Cisco Packet Tracer</span>
        </div>
      </div>
      <div class="skill-group">
        <div class="skill-group-label">Systems & Security</div>
        <div class="skill-tags">
          <span class="skill-tag">Server Admin</span><span class="skill-tag">Server Config</span>
          <span class="skill-tag">Kali Linux</span><span class="skill-tag">Penetration Testing</span>
          <span class="skill-tag">Computer Maintenance</span>
        </div>
      </div>
      <div class="skill-group">
        <div class="skill-group-label">Development</div>
        <div class="skill-tags">
          <span class="skill-tag">HTML</span><span class="skill-tag">Java</span>
          <span class="skill-tag">MySQL</span><span class="skill-tag">Databases</span>
          <span class="skill-tag">WordPress</span>
        </div>
      </div>
      <div class="skill-group">
        <div class="skill-group-label">Tools & Analysis</div>
        <div class="skill-tags">
          <span class="skill-tag">System Analysis</span><span class="skill-tag">Data Analysis</span>
          <span class="skill-tag">Web Development</span><span class="skill-tag">Technical Support</span>
        </div>
      </div>
    </div>
  </section>

  <section id="experience">
    <div class="section-header">
      <span class="section-num">02</span>
      <h2 class="section-title">Experience & Education</h2>
      <div class="section-line"></div>
    </div>
    <div class="timeline">
      <div class="timeline-item">
        <div class="timeline-dot"></div>
        <div class="timeline-period">Mar 2026 — Jul 2026 · Current</div>
        <div class="timeline-role">System Analyst & Data Analyst Intern</div>
        <div class="timeline-place">HPCS Sdn. Bhd. — IT Software, Web & Application Development</div>
        <div class="timeline-desc">Gaining real-world exposure to system analysis and data workflows within a software house environment, contributing to web and application development projects while building professional IT experience.</div>
        <span class="timeline-badge">Internship</span>
        <span class="timeline-badge">Current</span>
      </div>
      <div class="timeline-item">
        <div class="timeline-dot"></div>
        <div class="timeline-period">2024 — 2026</div>
        <div class="timeline-role">Diploma in Information Technology</div>
        <div class="timeline-place">Kolej Vokasional Sungai Buloh</div>
        <div class="timeline-desc">Completed a comprehensive vocational IT programme covering networking, systems, security, programming, and database management. Graduated with both a Malaysian Vocational Certificate and a Malaysian Skills Certificate (SKM) Level 3.</div>
        <span class="timeline-badge">Diploma</span>
        <span class="timeline-badge">SKM Level 3</span>
        <span class="timeline-badge">MVC</span>
      </div>
    </div>
  </section>

  <section id="projects">
    <div class="section-header">
      <span class="section-num">03</span>
      <h2 class="section-title">Projects</h2>
      <div class="section-line"></div>
    </div>
    <div class="projects-grid">
      @forelse($projects as $project)
      <div class="project-card">
        <div class="project-name">{{ $project->name }}</div>
        <div class="project-desc">{{ $project->description }}</div>
        <div class="project-tech">{{ $project->tech_stack }}</div>
        <div class="project-status">// {{ $project->status }}</div>
      </div>
      @empty
      <div class="project-empty">
        Tiada projek untuk dipaparkan. Sila jalankan `php artisan migrate --seed` pada pangkalan data Railway anda.
      </div>
      @endforelse
    </div>
  </section>

  <section id="contact">
    <div class="section-header">
      <span class="section-num">04</span>
      <h2 class="section-title">Contact</h2>
      <div class="section-line"></div>
    </div>
    <div class="contact-grid">
      <a class="contact-item" href="mailto:emanwifi123@gmail.com">
        <div class="contact-icon"><svg viewBox="0 0 24 24"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg></div>
        <div><div class="contact-label">Email</div><div class="contact-value">emanwifi123@gmail.com</div></div>
      </a>
      <a class="contact-item" href="https://www.linkedin.com/in/wafi-zubairi-44a930255/" target="_blank">
        <div class="contact-icon"><svg viewBox="0 0 24 24"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"/><rect x="2" y="9" width="4" height="12"/><circle cx="4" cy="4" r="2"/></svg></div>
        <div><div class="contact-label">LinkedIn</div><div class="contact-value">Wafi Zubairi</div></div>
      </a>
      <a class="contact-item" href="https://github.com/wafizubairi" target="_blank">
        <div class="contact-icon"><svg viewBox="0 0 24 24"><path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"/></svg></div>
        <div><div class="contact-label">GitHub</div><div class="contact-value">Wafi Zubairi</div></div>
      </a>
    </div>
  </section>

</div>

<footer>
  <p>Designed & built with intention &nbsp;·&nbsp; Wafi Zubairi &copy; {{ date('Y') }}</p>
</footer>

<script>
  const cur = document.getElementById('cursor');
  const ring = document.getElementById('cursor-ring');
  document.addEventListener('mousemove', e => {
    cur.style.left = e.clientX + 'px'; cur.style.top = e.clientY + 'px';
    ring.style.left = e.clientX + 'px'; ring.style.top = e.clientY + 'px';
  });
  document.querySelectorAll('a, button').forEach(el => {
    el.addEventListener('mouseenter', () => { ring.style.width = '44px'; ring.style.height = '44px'; ring.style.opacity = '0.5'; });
    el.addEventListener('mouseleave', () => { ring.style.width = '28px'; ring.style.height = '28px'; ring.style.opacity = '1'; });
  });
  const observer = new IntersectionObserver(entries => {
    entries.forEach((entry, i) => { if (entry.isIntersecting) setTimeout(() => entry.target.classList.add('visible'), i * 120); });
  }, { threshold: 0.15 });
  document.querySelectorAll('.timeline-item').forEach(el => observer.observe(el));
  const navLinks = document.querySelectorAll('.nav-links a');
  window.addEventListener('scroll', () => {
    let current = '';
    document.querySelectorAll('section').forEach(sec => { if (window.scrollY >= sec.offsetTop - 200) current = sec.id; });
    navLinks.forEach(a => { a.style.color = a.getAttribute('href') === '#' + current ? 'var(--accent-light)' : ''; });
  });
</script>
</body>
</html>