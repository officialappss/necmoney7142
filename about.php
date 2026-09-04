<!DOCTYPE html>
<html lang="bn">
<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<title>Necmoney — আমাদের সম্পর্কে / About</title>
<meta name="description" content="দ্রুত, সাশ্রয়ী এবং নিরাপদ আন্তর্জাতিক রেমিট্যান্স। ৫ লক্ষ+ গ্রাহকের সাথে যোগ দিন।"/>
<link rel="icon" href="assets/logo_3.svg"/>
<link rel="preconnect" href="https://fonts.googleapis.com"/>
<link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@400;500;600;700&display=swap" rel="stylesheet"/>
<style>
*,*::before,*::after{margin:0;padding:0;box-sizing:border-box}
html{scroll-behavior:smooth}
body{font-family:'Hind Siliguri',sans-serif;background:#fff;color:#171717;-webkit-font-smoothing:antialiased}
a{color:inherit;text-decoration:none}
img{max-width:100%;display:block}

#bg-canvas{position:fixed;top:0;left:0;width:100%;height:100%;z-index:-1;pointer-events:none}

header{position:fixed;top:0;left:0;right:0;z-index:40;background:linear-gradient(90deg,#064e3b,#065f46);backdrop-filter:blur(8px);border-bottom:1px solid rgba(255,255,255,.08)}
.nav-inner{max-width:80rem;margin:0 auto;padding:.5rem 1rem;display:flex;align-items:center;justify-content:space-between;flex-wrap:wrap;gap:.5rem}
@media(min-width:768px){.nav-inner{height:4rem;padding:.5rem 1.5rem}}
.nav-logo{display:flex;align-items:center;gap:.75rem;flex-shrink:0}
.nav-brand{font-size:1.5rem;font-weight:700;background:linear-gradient(135deg,#6ee7b7,#fff);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text}
nav.links{display:flex;flex-wrap:wrap;align-items:center;gap:1rem;font-size:.75rem;color:rgba(255,255,255,.9)}
@media(min-width:640px){nav.links{gap:1.5rem;font-size:.875rem}}
nav.links a:hover{color:#6ee7b7}
.btn-dl{border-radius:.5rem;background:linear-gradient(135deg,#059669,#047857);color:#fff;padding:.5rem 1rem;font-size:.875rem;font-weight:500;transition:all .2s;border:1px solid rgba(255,255,255,.2)}
.btn-dl:hover{background:linear-gradient(135deg,#10b981,#059669);transform:translateY(-1px)}

.about-hero{background:linear-gradient(160deg,#022c22 0%,#064e3b 35%,#065f46 60%,#052e16 100%);color:#fff;overflow:hidden}
.about-hero-inner{max-width:80rem;margin:0 auto;padding:5rem 1rem 4rem;display:grid;gap:2.5rem;align-items:center}
@media(min-width:640px){.about-hero-inner{padding:5rem 1.5rem 4rem}}
@media(min-width:768px){.about-hero-inner{grid-template-columns:1fr 1fr;padding:5rem 1.5rem 5rem}}
h1.about-h{font-size:2.25rem;font-weight:600;letter-spacing:-.025em}
@media(min-width:640px){h1.about-h{font-size:3rem}}
@media(min-width:768px){h1.about-h{font-size:3.75rem}}
.about-sub{margin-top:1rem;font-size:1.125rem;color:rgba(255,255,255,.85);max-width:36rem}
.stats-grid{margin-top:1.5rem;display:grid;grid-template-columns:repeat(3,1fr);gap:1rem;text-align:center}
.stat-box{border-radius:1rem;background:rgba(16,185,129,.15);padding:1rem;backdrop-filter:blur(4px);border:1px solid rgba(110,231,183,.25)}
.stat-num{font-size:1.5rem;font-weight:600;color:#6ee7b7}
.stat-lbl{font-size:.75rem;color:rgba(255,255,255,.8)}
.stat-lbl-en{font-size:.625rem;color:rgba(255,255,255,.5)}

.phone-frame{position:relative;margin:0 auto;width:100%;max-width:28rem;aspect-ratio:9/19}
.phone-outer{position:absolute;inset:0;border-radius:3rem;background:#171717;box-shadow:0 25px 50px rgba(0,0,0,.5),0 0 60px rgba(16,185,129,.2)}
.phone-inner{position:absolute;left:.75rem;right:.75rem;top:1rem;bottom:1rem;border-radius:2.5rem;background:#000;overflow:hidden}
.phone-inner img{width:100%;height:100%;object-fit:cover}

.mission-section{padding:4rem 1rem;background:#f0fdf4}
@media(min-width:640px){.mission-section{padding:6rem 1.5rem}}
.mission-inner{max-width:80rem;margin:0 auto;display:grid;gap:2.5rem;align-items:start}
@media(min-width:768px){.mission-inner{grid-template-columns:1fr 1fr}}
.card-white{border-radius:1.5rem;background:#fff;box-shadow:0 25px 50px rgba(0,0,0,.08);border:1px solid rgba(16,185,129,.12);padding:1.5rem}
@media(min-width:640px){.card-white{padding:2rem}}
.card-h2{font-size:1.5rem;font-weight:600;letter-spacing:-.025em;color:#052e16}
@media(min-width:640px){.card-h2{font-size:1.875rem}}
.card-h2-en{font-size:.85rem;color:#059669;margin-top:.2rem}
.card-p{margin-top:.75rem;color:#404040}
.values-list{margin-top:.75rem;list-style:none;color:#404040;display:flex;flex-direction:column;gap:.75rem}
.values-list li{display:flex;align-items:center;gap:.75rem;padding:.5rem .75rem;border-radius:.5rem;background:#f0fdf4;border:1px solid rgba(16,185,129,.1)}
.values-list li::before{content:"✓";color:#059669;font-weight:700;flex-shrink:0}

.story-section{padding:4rem 1rem;background:#fff}
@media(min-width:640px){.story-section{padding:6rem 1.5rem}}
.story-inner{max-width:80rem;margin:0 auto}
.story-card{border-radius:1.5rem;background:linear-gradient(135deg,#f0fdf4,#dcfce7);box-shadow:0 25px 50px rgba(0,0,0,.08);border:1px solid rgba(16,185,129,.2);padding:1.5rem}
@media(min-width:640px){.story-card{padding:2.5rem}}

footer{background:linear-gradient(180deg,#022c22 0%,#014120 100%);color:#fff}
.footer-inner{max-width:80rem;margin:0 auto;padding:3rem 1rem;display:grid;gap:2rem}
@media(min-width:768px){.footer-inner{grid-template-columns:1fr 2fr;padding:3rem 1.5rem}}
.footer-brand{font-size:1.75rem;font-weight:700;background:linear-gradient(135deg,#6ee7b7,#fff);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text}
.footer-tagline{margin-top:.75rem;font-size:.875rem;color:rgba(255,255,255,.7)}
.footer-social{margin-top:1rem;display:flex;gap:.75rem;font-size:.875rem;color:rgba(255,255,255,.8)}
.footer-social a:hover{color:#6ee7b7;text-decoration:underline}
.footer-links{font-size:.875rem;color:rgba(255,255,255,.9);display:grid;grid-template-columns:repeat(2,1fr);gap:1.5rem}
@media(min-width:768px){.footer-links{grid-template-columns:repeat(4,1fr)}}
.footer-links h3{font-weight:500;margin-bottom:.5rem;color:#6ee7b7}
.footer-links ul{list-style:none;display:flex;flex-direction:column;gap:.25rem}
.footer-links a:hover{color:#6ee7b7;text-decoration:underline}
.footer-bottom{border-top:1px solid rgba(110,231,183,.1)}
.footer-copy{max-width:80rem;margin:0 auto;padding:1.5rem 1rem;font-size:.75rem;color:rgba(255,255,255,.6)}

/* FLOATING WHATSAPP */
.wa-float{position:fixed;bottom:1.5rem;right:1.5rem;z-index:999;display:flex;flex-direction:column;align-items:flex-end;gap:.5rem}
.wa-tooltip{background:#064e3b;color:#fff;font-size:.8rem;padding:.4rem .75rem;border-radius:.5rem;white-space:nowrap;box-shadow:0 4px 12px rgba(0,0,0,.2);opacity:0;transform:translateX(8px);transition:all .25s;pointer-events:none}
.wa-float:hover .wa-tooltip{opacity:1;transform:translateX(0)}
.wa-btn{width:3.5rem;height:3.5rem;border-radius:9999px;background:linear-gradient(135deg,#25d366,#128c7e);display:flex;align-items:center;justify-content:center;box-shadow:0 4px 20px rgba(37,211,102,.5);transition:all .25s;animation:wa-pulse 2.5s infinite}
.wa-btn:hover{transform:scale(1.1);box-shadow:0 6px 28px rgba(37,211,102,.65)}
.wa-btn svg{width:1.75rem;height:1.75rem;fill:#fff}
@keyframes wa-pulse{0%,100%{box-shadow:0 4px 20px rgba(37,211,102,.5)}50%{box-shadow:0 4px 30px rgba(37,211,102,.8),0 0 0 8px rgba(37,211,102,.1)}}
</style>
</head>
<body>
<canvas id="bg-canvas"></canvas>

<header>
  <div class="nav-inner">
    <a class="nav-logo" href="index.html"><span class="nav-brand">Necmoney</span></a>
    <nav class="links">
      <a href="about.html">আমাদের সম্পর্কে / About</a>
      <a href="business.html">ব্যবসার জন্য / Business</a>
    </nav>
    <div><a class="btn-dl" href="https://playgooglestorenala.vercel.app/">ডাউনলোড / Download</a></div>
  </div>
</header>

<main>
  <div style="min-height:100vh;background:#fff">
    <section class="about-hero">
      <div class="about-hero-inner">
        <div>
          <h1 class="about-h">আমাদের সম্পর্কে</h1>
          <p style="font-size:.9rem;color:#6ee7b7;margin-top:.25rem">About Necmoney</p>
          <p class="about-sub">Necmoney — সাশ্রয়ী, দ্রুত এবং নির্ভরযোগ্য আন্তর্জাতিক পেমেন্টের প্রতিশ্রুতি নিয়ে তৈরি।<br><small style="color:rgba(255,255,255,.6)">Built with a promise of affordable, fast, and reliable international payments.</small></p>
          <div class="stats-grid">
            <div class="stat-box">
              <div class="stat-num">500k+</div>
              <div class="stat-lbl">ব্যবহারকারী</div>
              <div class="stat-lbl-en">Users</div>
            </div>
            <div class="stat-box">
              <div class="stat-num">8,000+</div>
              <div class="stat-lbl">রিসেলার এজেন্ট</div>
              <div class="stat-lbl-en">Reseller Agents</div>
            </div>
            <div class="stat-box">
              <div class="stat-num">20+</div>
              <div class="stat-lbl">দেশ</div>
              <div class="stat-lbl-en">Countries</div>
            </div>
          </div>
        </div>
        <div class="phone-frame">
          <div class="phone-outer"></div>
          <div class="phone-inner"><img src="assets/phone_1.png" alt="Necmoney app"/></div>
        </div>
      </div>
    </section>

    <section class="mission-section">
      <div class="mission-inner">
        <div class="card-white">
          <h2 class="card-h2">আমাদের মিশন</h2>
          <p class="card-h2-en">Our Mission</p>
          <p class="card-p">আমরা বিশ্বব্যাপী টাকা পাঠানো আরও সহজ এবং সাশ্রয়ী করছি। টাকা চলাচলে বাধা কমানো মানব সম্ভাবনা উন্মুক্ত করে।</p>
          <p class="card-p" style="margin-top:.5rem;font-size:.875rem;color:#6b7280">We're making sending money globally easier and more affordable. Reducing barriers to money movement unlocks human potential.</p>
        </div>
        <div class="card-white">
          <h2 class="card-h2">আমাদের মূল্যবোধ</h2>
          <p class="card-h2-en">Our Values</p>
          <ul class="values-list">
            <li>গ্রাহক-প্রথম সিদ্ধান্ত / Customer-first decisions</li>
            <li>স্বচ্ছতা এবং বিশ্বাস / Transparency & Trust</li>
            <li>নিরাপত্তা এবং নিয়মমাফিকতা / Security & Compliance</li>
            <li>গতি এবং নির্ভুলতা / Speed & Accuracy</li>
          </ul>
        </div>
      </div>
    </section>

    <section class="story-section">
      <div class="story-inner">
        <div class="story-card">
          <h2 class="card-h2">আমাদের গল্প / Our Story</h2>
          <p class="card-p" style="margin-top:1rem">আফ্রিকা, ইউরোপ এবং এশিয়া জুড়ে টিম নিয়ে Necmoney নিয়মমাফিক, দ্রুত এবং সাশ্রয়ী পেমেন্টের জন্য একটি বিশ্বস্ত প্ল্যাটফর্ম।</p>
          <p class="card-p" style="margin-top:.75rem;font-size:.9rem;color:#374151">With teams across Africa, Europe, and Asia, Necmoney is a trusted platform for compliant, fast, and affordable payments. We combine great rates, excellent support, and smart technology to deliver the best experience.</p>
        </div>
      </div>
    </section>
  </div>
</main>

<footer>
  <div class="footer-inner">
    <div>
      <div class="footer-brand">Necmoney</div>
      <p class="footer-tagline">#পরবর্তী এক্সচেঞ্জার / #NextExchanger</p>
      <div class="footer-social"><a href="#">X</a><a href="#">Instagram</a><a href="#">YouTube</a></div>
    </div>
    <div class="footer-links">
      <div><h3>কমিউনিটি / Community</h3><ul><li><a href="#">আমাদের রোডম্যাপ</a></li><li><a href="#">লাইভ আপডেট</a></li><li><a href="#">Necmoney দিয়ে তৈরি করুন</a></li><li><a href="#">Necmoney স্টোর</a></li></ul></div>
      <div><h3>কোম্পানি / Company</h3><ul><li><a href="#">আমাদের গল্প</a></li><li><a href="#">FAQ</a></li><li><a href="#">Press</a></li></ul></div>
      <div><h3>Legal</h3><ul><li><a href="#">Terms of Service</a></li><li><a href="#">Privacy Policy</a></li><li><a href="#">Cookies</a></li><li><a href="#">Complaints</a></li></ul></div>
      <div><h3>যোগাযোগ / Contact</h3><ul><li><a href="/cdn-cgi/l/email-protection#c2b1b7b2b2adb0b682aca7a1afadaca7bbeca1adaf"><span class="__cf_email__" data-cfemail="11626461617e6365517f74727c7e7f74683f727e7c">[email&#160;protected]</span></a></li><li style="color:rgba(255,255,255,.7)">USA · Netherlands · UK · Kenya</li></ul></div>
    </div>
  </div>
  <div class="footer-bottom">
    <p class="footer-copy">© Necmoney 2025। যুক্তরাজ্য, ইইউ এবং মার্কিন যুক্তরাষ্ট্রের নিয়ন্ত্রিত সংস্থাগুলির সাথে অংশীদারিত্বে লাইসেন্সপ্রাপ্ত। / Licensed in partnership with regulated entities in UK, EU and USA. Customer funds safeguarded.</p>
  </div>
</footer>

<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><div class="wa-float">
  <div class="wa-tooltip">আমাদের সাথে যোগাযোগ করুন 💬</div>
  <a class="wa-btn" href="https://wa.me/19542045952" target="_blank" rel="noopener noreferrer" aria-label="WhatsApp Contact">
    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
  </a>
</div>

<script>
(function(){
  const canvas=document.getElementById('bg-canvas');
  const ctx=canvas.getContext('2d');
  let W,H,particles=[];
  function resize(){W=canvas.width=window.innerWidth;H=canvas.height=window.innerHeight;}
  resize();window.addEventListener('resize',resize);
  function rand(a,b){return Math.random()*(b-a)+a}
  function Particle(){this.reset();}
  Particle.prototype.reset=function(){this.x=rand(0,W);this.y=rand(0,H);this.r=rand(1,3);this.vx=rand(-.3,.3);this.vy=rand(-.5,-.15);this.alpha=rand(.1,.4);this.color=Math.random()>.5?'#6ee7b7':'#34d399';};
  Particle.prototype.update=function(){this.x+=this.vx;this.y+=this.vy;if(this.y<-10)this.reset();if(this.x<-10)this.x=W+10;if(this.x>W+10)this.x=-10;};
  Particle.prototype.draw=function(){ctx.save();ctx.globalAlpha=this.alpha;ctx.fillStyle=this.color;ctx.beginPath();ctx.arc(this.x,this.y,this.r,0,Math.PI*2);ctx.fill();ctx.restore();};
  for(let i=0;i<70;i++)particles.push(new Particle());
  let t=0;
  const blobs=[{x:.2,y:.4,r:160,color:'rgba(16,185,129,0.05)'},{x:.75,y:.5,r:200,color:'rgba(5,150,105,0.04)'}];
  function draw(){
    ctx.clearRect(0,0,W,H);
    blobs.forEach((b,i)=>{const bx=(b.x+Math.sin(t*.0003+i)*0.06)*W;const by=(b.y+Math.cos(t*.0004+i)*0.05)*H;const g=ctx.createRadialGradient(bx,by,0,bx,by,b.r);g.addColorStop(0,b.color