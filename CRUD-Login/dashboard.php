<!DOCTYPE html>

<html class="light" lang="pt-br"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Gerenciar Usuários | Prestige Admin</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;600;700;800&amp;family=Inter:wght@400;500;600&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            "colors": {
                    "on-surface": "#141d23",
                    "on-tertiary-fixed-variant": "#454748",
                    "on-secondary-fixed-variant": "#3f4274",
                    "secondary-fixed-dim": "#bfc2fc",
                    "on-secondary-container": "#4d5082",
                    "surface-bright": "#f6faff",
                    "inverse-primary": "#edc14a",
                    "surface-container-low": "#ecf5fe",
                    "surface-tint": "#765b00",
                    "error": "#ba1a1a",
                    "on-surface-variant": "#4e4635",
                    "on-primary-fixed": "#241a00",
                    "on-background": "#141d23",
                    "tertiary-fixed-dim": "#c5c7c8",
                    "on-primary-fixed-variant": "#594400",
                    "tertiary-container": "#b4b6b7",
                    "surface-container": "#e6eff8",
                    "on-tertiary-container": "#454849",
                    "outline": "#7f7663",
                    "primary-fixed-dim": "#edc14a",
                    "background": "#f6faff",
                    "tertiary": "#5c5f60",
                    "secondary": "#575a8d",
                    "on-tertiary": "#ffffff",
                    "surface-dim": "#d2dbe4",
                    "surface-container-high": "#e0e9f2",
                    "tertiary-fixed": "#e1e3e4",
                    "surface-variant": "#dbe4ed",
                    "surface-container-highest": "#dbe4ed",
                    "on-error-container": "#93000a",
                    "on-primary-container": "#5a4400",
                    "inverse-surface": "#293138",
                    "surface-container-lowest": "#ffffff",
                    "on-error": "#ffffff",
                    "on-tertiary-fixed": "#191c1d",
                    "primary": "#765b00",
                    "primary-fixed": "#ffdf93",
                    "on-secondary": "#ffffff",
                    "secondary-container": "#c2c5ff",
                    "surface": "#f6faff",
                    "on-secondary-fixed": "#131546",
                    "on-primary": "#ffffff",
                    "primary-container": "#dbb13b",
                    "outline-variant": "#d1c5af",
                    "inverse-on-surface": "#e9f2fb",
                    "error-container": "#ffdad6",
                    "secondary-fixed": "#e0e0ff"
            },
            "borderRadius": {
                    "DEFAULT": "0.25rem",
                    "lg": "0.5rem",
                    "xl": "0.75rem",
                    "full": "9999px"
            },
            "spacing": {
                    "sidebar-collapsed": "80px",
                    "container-max": "1440px",
                    "margin-page": "2rem",
                    "sidebar-width": "280px",
                    "gutter": "1.5rem",
                    "base": "8px"
            },
            "fontFamily": {
                    "h3": ["Manrope"],
                    "label-caps": ["Inter"],
                    "h1": ["Manrope"],
                    "h2": ["Manrope"],
                    "body-md": ["Inter"],
                    "body-sm": ["Inter"]
            },
            "fontSize": {
                    "h3": ["1.5rem", {"lineHeight": "1.4", "fontWeight": "600"}],
                    "label-caps": ["0.75rem", {"lineHeight": "1", "letterSpacing": "0.05em", "fontWeight": "600"}],
                    "h1": ["2.5rem", {"lineHeight": "1.2", "fontWeight": "700"}],
                    "h2": ["2rem", {"lineHeight": "1.3", "fontWeight": "600"}],
                    "body-md": ["1rem", {"lineHeight": "1.6", "fontWeight": "400"}],
                    "body-sm": ["0.875rem", {"lineHeight": "1.5", "fontWeight": "400"}]
            }
          },
        },
      }
    </script>
<style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
            vertical-align: middle;
        }
        .modal-backdrop {
            background-color: rgba(20, 29, 35, 0.4);
            backdrop-filter: blur(4px);
        }
    </style>
</head>
<body class="bg-background text-on-surface font-body-md overflow-x-hidden">
<!-- Side Navigation Bar -->
<aside class="fixed left-0 top-0 h-full w-sidebar-width bg-on-secondary-fixed-variant shadow-[4px_0_12px_rgba(23,26,74,0.08)] flex flex-col py-8 z-50">
<div class="px-8 mb-10">
<h1 class="text-h3 font-h3 font-bold text-primary-container">AdminConsole</h1>
<p class="text-body-sm text-surface-variant/70">Executive Portal</p>
</div>
<nav class="flex-grow space-y-2">
<a class="flex items-center px-8 py-4 text-surface-variant hover:bg-white/5 transition-all duration-250" href="#">
<span class="material-symbols-outlined mr-4">dashboard</span>
<span class="font-body-md">Dashboard</span>
</a>
<a class="flex items-center px-8 py-4 border-l-4 border-primary-container bg-white/5 text-primary-container font-bold transition-all duration-250" href="#">
<span class="material-symbols-outlined mr-4">group</span>
<span class="font-body-md">Users</span>
</a>
<a class="flex items-center px-8 py-4 text-surface-variant hover:bg-white/5 transition-all duration-250" href="#">
<span class="material-symbols-outlined mr-4">settings</span>
<span class="font-body-md">Settings</span>
</a>
</nav>
<div class="mt-auto px-8">
<button class="flex items-center w-full px-4 py-3 rounded-lg text-surface-variant hover:bg-white/10 transition-all duration-250 ease-in-out">
<span class="material-symbols-outlined mr-4">logout</span>
<span class="font-body-md">Logout</span>
</button>
</div>
</aside>
<!-- Main Content Area -->
<main class="ml-sidebar-width min-h-screen">
<!-- Top Navigation Bar -->
<header class="fixed top-0 right-0 w-full lg:pl-sidebar-width z-40 bg-surface shadow-sm border-b border-outline-variant flex justify-between items-center h-16 px-margin-page">
<div class="flex items-center gap-4">
<h2 class="text-h2 font-h2 font-bold text-on-secondary-fixed-variant leading-none">Gerenciar Usuários</h2>
</div>
<div class="flex items-center gap-6">
<div class="relative hidden md:block">
<input class="bg-surface-container-low border-none rounded-full px-6 py-2 w-64 focus:ring-2 focus:ring-primary-container text-body-sm" placeholder="Search..." type="text"/>
<span class="material-symbols-outlined absolute right-4 top-1/2 -translate-y-1/2 text-outline">search</span>
</div>
<div class="flex items-center gap-3">
<button class="w-10 h-10 flex items-center justify-center rounded-full text-on-surface-variant hover:bg-surface-container-low transition-colors duration-250">
<span class="material-symbols-outlined">notifications</span>
</button>
<div class="w-10 h-10 rounded-full bg-surface-container-high border-2 border-primary-container overflow-hidden">
<img alt="User Profile" data-alt="A professional headshot of a senior executive male in a tailored suit, looking confident and approachable. The background is a blurred high-end corporate office with soft, warm lighting and mahogany accents. The image is crisp, with a shallow depth of field, maintaining a prestigious and modern administrative aesthetic." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCVMf60HPDEzkuPpqdMOD1XyaS8rDkHteKa4eh9p34tVlj-0dYvUDoAqmJ5Bc5pj_AFC9hO9BVhBTYbzJSxehM3pOxLJEx2JswJqmBMPLIV7-DPVzVoYavjxmV2RPemJlSaauiYVC65nMy9H-kgWSe39i0uNS2ci2wcCW8tcsUd9dT5N1QYttuhBcPreHEXn8JwMVcZsHoTP8-kmObXGWXuc22RXzpSwd_Qg-9dBTWr4lnNVMIgHStFw3JQzXZlIUa-ZA_x8eOpe6M"/>
</div>
</div>
</div>
</header>
<!-- Content Canvas -->
<div class="pt-24 px-margin-page pb-12">
<!-- Breadcrumbs & Action Row -->
<div class="flex flex-col md:flex-row md:items-center justify-between mb-8 gap-4">
<div>
<nav class="flex items-center text-body-sm text-outline mb-2">
<span>Prestige Admin</span>
<span class="material-symbols-outlined text-[16px] mx-2">chevron_right</span>
<span class="text-on-surface font-semibold">User Management</span>
</nav>
<p class="text-on-surface-variant text-body-md">Administre as credenciais e permissões dos usuários do sistema.</p>
</div>
<button class="bg-primary-container text-on-primary-container px-6 py-3 rounded-lg font-bold shadow-md hover:bg-[#c99e2f] transition-all duration-250 flex items-center gap-2">
<span class="material-symbols-outlined">add</span>
                    Adicionar Usuário
                </button>
</div>
<!-- Dashboard Grid -->
<div class="grid grid-cols-12 gap-gutter">
<!-- Table Card -->
<div class="col-span-12 bg-white border border-outline-variant rounded-xl shadow-sm overflow-hidden">
<div class="px-6 py-5 border-b border-outline-variant flex items-center justify-between bg-surface-container-lowest">
<h3 class="font-h3 text-on-surface">Diretório de Usuários</h3>
<div class="flex gap-2">
<button class="p-2 hover:bg-surface-container rounded-lg text-outline transition-colors">
<span class="material-symbols-outlined">filter_list</span>
</button>
<button class="p-2 hover:bg-surface-container rounded-lg text-outline transition-colors">
<span class="material-symbols-outlined">download</span>
</button>
</div>
</div>
<div class="overflow-x-auto">
<table class="w-full text-left border-collapse">
<thead>
<tr class="bg-surface-container-low text-label-caps text-on-surface-variant uppercase tracking-wider">
<th class="px-6 py-4 font-semibold">ID</th>
<th class="px-6 py-4 font-semibold">Nome</th>
<th class="px-6 py-4 font-semibold">Email</th>
<th class="px-6 py-4 font-semibold">Password</th>
<th class="px-6 py-4 font-semibold text-right">Ações</th>
</tr>
</thead>
<tbody class="divide-y divide-outline-variant">
<!-- Row 1 -->
<tr class="hover:bg-surface-container-lowest transition-colors group">
<td class="px-6 py-4 text-body-sm font-mono text-outline">#USR-8921</td>
<td class="px-6 py-4">
<div class="flex items-center gap-3">
<div class="w-8 h-8 rounded-full bg-secondary-container text-on-secondary-container flex items-center justify-center font-bold text-xs">AM</div>
<span class="font-semibold text-on-surface">Adriano Meira</span>
</div>
</td>
<td class="px-6 py-4 text-body-sm text-on-surface-variant">adriano.meira@prestige.com</td>
<td class="px-6 py-4 text-body-sm text-outline">••••••••••••</td>
<td class="px-6 py-4 text-right">
<div class="flex justify-end gap-2">
<button class="p-2 text-on-secondary-container hover:bg-secondary-container rounded-lg transition-colors">
<span class="material-symbols-outlined">edit</span>
</button>
<button class="p-2 text-error hover:bg-error-container/20 rounded-lg transition-colors">
<span class="material-symbols-outlined">delete</span>
</button>
</div>
</td>
</tr>
<!-- Row 2 -->
<tr class="hover:bg-surface-container-lowest transition-colors group">
<td class="px-6 py-4 text-body-sm font-mono text-outline">#USR-7732</td>
<td class="px-6 py-4">
<div class="flex items-center gap-3">
<div class="w-8 h-8 rounded-full bg-primary-fixed text-on-primary-fixed flex items-center justify-center font-bold text-xs">LC</div>
<span class="font-semibold text-on-surface">Lúcia Cavalcanti</span>
</div>
</td>
<td class="px-6 py-4 text-body-sm text-on-surface-variant">l.cavalcanti@prestige.com</td>
<td class="px-6 py-4 text-body-sm text-outline">••••••••••••</td>
<td class="px-6 py-4 text-right">
<div class="flex justify-end gap-2">
<button class="p-2 text-on-secondary-container hover:bg-secondary-container rounded-lg transition-colors">
<span class="material-symbols-outlined">edit</span>
</button>
<button class="p-2 text-error hover:bg-error-container/20 rounded-lg transition-colors">
<span class="material-symbols-outlined">delete</span>
</button>
</div>
</td>
</tr>
<!-- Row 3 -->
<tr class="hover:bg-surface-container-lowest transition-colors group">
<td class="px-6 py-4 text-body-sm font-mono text-outline">#USR-4421</td>
<td class="px-6 py-4">
<div class="flex items-center gap-3">
<div class="w-8 h-8 rounded-full bg-surface-dim text-on-surface flex items-center justify-center font-bold text-xs">RF</div>
<span class="font-semibold text-on-surface">Ricardo Fonseca</span>
</div>
</td>
<td class="px-6 py-4 text-body-sm text-on-surface-variant">r.fonseca@prestige.com</td>
<td class="px-6 py-4 text-body-sm text-outline">••••••••••••</td>
<td class="px-6 py-4 text-right">
<div class="flex justify-end gap-2">
<button class="p-2 text-on-secondary-container hover:bg-secondary-container rounded-lg transition-colors">
<span class="material-symbols-outlined">edit</span>
</button>
<button class="p-2 text-error hover:bg-error-container/20 rounded-lg transition-colors">
<span class="material-symbols-outlined">delete</span>
</button>
</div>
</td>
</tr>
<!-- Row 4 -->
<tr class="hover:bg-surface-container-lowest transition-colors group">
<td class="px-6 py-4 text-body-sm font-mono text-outline">#USR-9901</td>
<td class="px-6 py-4">
<div class="flex items-center gap-3">
<div class="w-8 h-8 rounded-full bg-on-secondary-fixed-variant text-white flex items-center justify-center font-bold text-xs">BP</div>
<span class="font-semibold text-on-surface">Beatriz Prado</span>
</div>
</td>
<td class="px-6 py-4 text-body-sm text-on-surface-variant">b.prado@prestige.com</td>
<td class="px-6 py-4 text-body-sm text-outline">••••••••••••</td>
<td class="px-6 py-4 text-right">
<div class="flex justify-end gap-2">
<button class="p-2 text-on-secondary-container hover:bg-secondary-container rounded-lg transition-colors">
<span class="material-symbols-outlined">edit</span>
</button>
<button class="p-2 text-error hover:bg-error-container/20 rounded-lg transition-colors">
<span class="material-symbols-outlined">delete</span>
</button>
</div>
</td>
</tr>
</tbody>
</table>
</div>
<!-- Pagination -->
<div class="px-6 py-4 bg-surface-container-lowest border-t border-outline-variant flex items-center justify-between">
<span class="text-body-sm text-outline">Exibindo 4 de 12 usuários</span>
<div class="flex items-center gap-1">
<button class="p-2 rounded hover:bg-surface-container text-outline transition-colors disabled:opacity-30">
<span class="material-symbols-outlined">chevron_left</span>
</button>
<button class="w-8 h-8 rounded bg-primary-container text-on-primary-container font-bold text-body-sm">1</button>
<button class="w-8 h-8 rounded hover:bg-surface-container text-on-surface text-body-sm">2</button>
<button class="w-8 h-8 rounded hover:bg-surface-container text-on-surface text-body-sm">3</button>
<button class="p-2 rounded hover:bg-surface-container text-outline transition-colors">
<span class="material-symbols-outlined">chevron_right</span>
</button>
</div>
</div>
</div>
<!-- Insight Card Asymmetric Layout -->
<div class="col-span-12 lg:col-span-4 bg-on-secondary-fixed-variant text-white p-8 rounded-xl shadow-lg flex flex-col justify-between relative overflow-hidden">
<div class="relative z-10">
<span class="bg-primary-container/20 text-primary-container px-3 py-1 rounded-full text-label-caps mb-6 inline-block">SYSTEM STATUS</span>
<h4 class="text-h3 font-h3 mb-4">Security Audit Overview</h4>
<p class="text-surface-variant/80 text-body-md mb-8">Todos os usuários ativos estão em conformidade com as novas políticas de criptografia 2FA.</p>
<div class="flex items-center gap-4">
<div class="flex -space-x-3">
<div class="w-10 h-10 rounded-full border-2 border-on-secondary-fixed-variant bg-slate-300"></div>
<div class="w-10 h-10 rounded-full border-2 border-on-secondary-fixed-variant bg-slate-400"></div>
<div class="w-10 h-10 rounded-full border-2 border-on-secondary-fixed-variant bg-slate-500"></div>
</div>
<span class="text-body-sm font-medium">+8 Administradores</span>
</div>
</div>
<!-- Decorative background element -->
<div class="absolute -right-10 -bottom-10 w-40 h-40 bg-white/5 rounded-full blur-3xl"></div>
</div>
<div class="col-span-12 lg:col-span-8 grid grid-cols-2 gap-gutter">
<div class="bg-white p-6 border border-outline-variant rounded-xl shadow-sm flex items-center gap-6">
<div class="w-12 h-12 bg-primary-container/10 text-primary-container rounded-lg flex items-center justify-center">
<span class="material-symbols-outlined">how_to_reg</span>
</div>
<div>
<p class="text-label-caps text-outline">Usuários Verificados</p>
<h4 class="text-h2 font-h2 text-on-surface leading-none">98.2%</h4>
</div>
</div>
<div class="bg-white p-6 border border-outline-variant rounded-xl shadow-sm flex items-center gap-6">
<div class="w-12 h-12 bg-secondary-container/30 text-secondary rounded-lg flex items-center justify-center">
<span class="material-symbols-outlined">update</span>
</div>
<div>
<p class="text-label-caps text-outline">Última Atualização</p>
<h4 class="text-h3 font-h3 text-on-surface leading-none">14 min atrás</h4>
</div>
</div>
<div class="col-span-2 bg-white p-6 border border-outline-variant rounded-xl shadow-sm flex items-center justify-between">
<div class="flex items-center gap-4">
<div class="w-10 h-10 bg-error/10 text-error rounded-full flex items-center justify-center">
<span class="material-symbols-outlined">warning</span>
</div>
<p class="text-body-md text-on-surface font-medium">3 tentativas de login bloqueadas na última hora.</p>
</div>
<button class="text-primary font-bold text-body-sm hover:underline">Ver Detalhes</button>
</div>
</div>
</div>
</div>
</main>
<!-- Modal Backdrop (Hidden by Default) -->
<div class="fixed inset-0 z-[60] flex items-center justify-center modal-backdrop invisible opacity-0 transition-all duration-250" id="modalContainer">
<!-- Modal Card -->
<div class="bg-white w-full max-w-md rounded-xl shadow-2xl overflow-hidden transform scale-95 transition-all duration-250">
<div class="px-8 py-6 border-b border-outline-variant flex justify-between items-center">
<h3 class="font-h3 text-on-surface" id="modalTitle">Adicionar Usuário</h3>
<button class="text-outline hover:text-on-surface transition-colors" onclick="closeModal()">
<span class="material-symbols-outlined">close</span>
</button>
</div>
<form class="p-8 space-y-6" method="POST" action="cadastrar.php">
<div class="space-y-2">
<label class="text-label-caps text-on-surface-variant">Nome Completo</label>
<input class="w-full border-outline-variant rounded-lg focus:border-primary-container focus:ring-primary-container transition-all text-body-md" name="nome" placeholder="Ex: João da Silva" type="text"/>
</div>
<div class="space-y-2">
<label class="text-label-caps text-on-surface-variant">Email Institucional</label>
<input class="w-full border-outline-variant rounded-lg focus:border-primary-container focus:ring-primary-container transition-all text-body-md" name="email" placeholder="nome@prestige.com" type="email"/>
</div>
<div class="space-y-2">
<label class="text-label-caps text-on-surface-variant">Senha de Acesso</label>
<div class="relative">
<input class="w-full border-outline-variant rounded-lg focus:border-primary-container focus:ring-primary-container transition-all text-body-md" name="senha" placeholder="••••••••" type="password"/>
<button class="absolute right-3 top-1/2 -translate-y-1/2 text-outline" type="button">
<span class="material-symbols-outlined text-[20px]">visibility</span>
</button>
</div>
</div>
<div class="pt-4 flex gap-4">
<button class="flex-1 py-3 rounded-lg border border-outline font-semibold text-on-surface hover:bg-surface-container-low transition-all" onclick="closeModal()" type="button">Cancelar</button>
<button class="flex-1 py-3 rounded-lg bg-primary-container text-on-primary-container font-bold shadow-md hover:bg-[#c99e2f] transition-all" type="submit">Confirmar</button>
</div>
</form>
</div>
</div>
<script>
        // Modal Interaction Mockup
        const addBtn = document.querySelector('button.bg-primary-container');
        const modal = document.getElementById('modalContainer');
        const modalContent = modal.querySelector('div');

        function openModal() {
            modal.classList.remove('invisible', 'opacity-0');
            modalContent.classList.remove('scale-95');
            modalContent.classList.add('scale-100');
            document.body.style.overflow = 'hidden';
        }

        function closeModal() {
            modal.classList.add('invisible', 'opacity-0');
            modalContent.classList.remove('scale-100');
            modalContent.classList.add('scale-95');
            document.body.style.overflow = '';
        }

        addBtn.addEventListener('click', openModal);

        // CRUD Mock (Visual confirmation for UI logic)
        document.querySelectorAll('button .material-symbols-outlined').forEach(icon => {
            if(icon.innerText === 'delete') {
                icon.parentElement.addEventListener('click', function() {
                    if(confirm('Tem certeza que deseja excluir este usuário? Esta ação não pode ser desfeita.')) {
                        this.closest('tr').classList.add('opacity-0', '-translate-x-10');
                        setTimeout(() => this.closest('tr').remove(), 300);
                    }
                });
            }
            if(icon.innerText === 'edit') {
                icon.parentElement.addEventListener('click', () => {
                    document.getElementById('modalTitle').innerText = 'Editar Usuário';
                    openModal();
                });
            }
        });

        // Close on clicking backdrop
        modal.addEventListener('click', (e) => {
            if(e.target === modal) closeModal();
        });
    </script>
</body></html>