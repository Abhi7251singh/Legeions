# ⚔️ LEGION - PHP + React + Python AI MVC Framework

Legion is a modern Laravel-style MVC framework built for AI-powered full-stack development. It integrates PHP, React.js, and Python with a clean architecture and minimal code.

![Legion Logo](https://weblytechnolab.com/abhishek/legion_logo_resized.png)

---

## 🚀 Key Features

- ✅ MVC folder structure (cleaner than Laravel)
- ⚛️ React + Bootstrap UI (auto-preconfigured)
- 🧠 Python-AI bridge using `php-py`
- 📦 Composer + Vite + npm integration
- 🐳 Docker-ready with local & remote DB support
- 🔧 CLI tool like Artisan:
  - `legion run` → Start server
  - `legion reload` → Rebuild everything
  - `legion cache:pl` → Prewarm Python-AI model

---

## 🧩 CLI Commands

Use Legion from the terminal just like Laravel Artisan:

```bash
legion run         # Start server on http://localhost:8000
legion reload      # Reinstall npm + rebuild + autoload
legion cache:pl    # Warm up Python model via php-py
