<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* base.html.twig */
class __TwigTemplate_2ba67001b8c4bf5e2ecbbc5de7de30d3 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <title>";
        // line 6
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>

        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"\" crossorigin=\"anonymous\">
\t\t<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/@yaireo/tagify/dist/tagify.css\">
\t\t<script src=\"https://cdn.jsdelivr.net/npm/@yaireo/tagify\"></script>

        ";
        // line 12
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 48
        yield "\t\t
\t\t";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('encore_entry_link_tags')->getCallable()("app"), "html", null, true);
        yield "
\t\t<style>
\t\t.palette-inline, #colorPalette {
\t\t  position: relative !important;
\t\t  z-index: 99999 !important;
\t\t  pointer-events: auto !important;
\t\t}

\t\t.palette-inline .swatch,
\t\t.palette-inline .gray-swatch,
\t\t.palette-inline button {
\t\t  pointer-events: auto !important;
\t\t}

\t\t.picmo, .picmo-popup, .picmo-picker, .picmo-popup-picker, .picmo__picker {
\t\t  z-index: 100000 !important;
\t\t  position: fixed !important;
\t\t  pointer-events: auto !important;
\t\t}

\t\t.navbar { z-index: 1000; } 
\t\t</style>

    </head>
    <body class=\"bg-light\">
        <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark mb-4\">
            <div class=\"container\">
                <a class=\"navbar-brand\" href=\"";
        // line 76
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Dispensa</a>
                <div class=\"collapse navbar-collapse\">
                    <ul class=\"navbar-nav ms-auto\">
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
        // line 79
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_prodotto_index");
        yield "\">Prodotti</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
        // line 80
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_scadenze_index");
        yield "\">Scadenze</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <main class=\"container\">
            ";
        // line 87
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 87, $this->source); })()), "flashes", [], "any", false, false, false, 87));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 88
            yield "                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 89
                yield "                    <div class=\"alert alert-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "</div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 91
            yield "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        yield "
            ";
        // line 93
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 94
        yield "        </main>

\t\t<script src=\"https://cdn.jsdelivr.net/npm/flatpickr\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js\" integrity=\"\" crossorigin=\"anonymous\"></script>
        ";
        // line 98
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 99
        yield "\t\t";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('encore_entry_script_tags')->getCallable()("app"), "html", null, true);
        yield "
\t\t<script src=\"";
        // line 100
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/app.js"), "html", null, true);
        yield "\"></script>
\t\t<script>
\t\tdocument.addEventListener('click', function(e){
\t\t  const btn = e.target.closest('button[data-confirm], a[data-confirm]');
\t\t  if(!btn) return;
\t\t  const form = btn.closest('form');
\t\t  const msg = btn.getAttribute('data-confirm');
\t\t  if(!msg) return;
\t\t  e.preventDefault();
\t\t  if (confirm(msg)) {
\t\t\tif (form) form.submit();
\t\t\telse {
\t\t\t  const href = btn.getAttribute('href');
\t\t\t  if (href) window.location = href;
\t\t\t}
\t\t  }
\t\t});
\t\t</script>

<script>
  window.__prodFragmentUrlTemplate = '";
        // line 120
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_prodotto_fragment", ["id" => 0]);
        yield "';
  window.__prodShowUrlTemplate     = '";
        // line 121
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_prodotto_show", ["id" => 0]);
        yield "';
  window.__appBasePath = '";
        // line 122
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 122, $this->source); })()), "request", [], "any", false, false, false, 122), "basePath", [], "any", false, false, false, 122), "html", null, true);
        yield "';
</script>


<div class=\"modal fade\" id=\"modalShowProduct\" tabindex=\"-1\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\">Dettaglio prodotto</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Chiudi\"></button>
      </div>
      <div class=\"modal-body\" id=\"modalShowProductBody\">
        <div class=\"text-center py-4\">
          <div class=\"spinner-border\" role=\"status\"><span class=\"visually-hidden\">Caricamento...</span></div>
        </div>
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Chiudi</button>
      </div>
    </div>
  </div>
</div>


    </body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Dispensa";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 12
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        yield "\t\t\t<style>
\t\t\t.fc-event, 
\t\t\t.fc-event * ,
\t\t\t.fc-daygrid-event .fc-event-title,     /* FullCalendar dayGrid */
\t\t\t.fc-timegrid-event .fc-event-title,    /* FullCalendar timeGrid */
\t\t\t.fc-list-event .fc-event-title {       /* FullCalendar list view */
\t\t\t  text-shadow:
\t\t\t\t-1px -1px 0 rgba(0,0,0,0.75),
\t\t\t\t 1px -1px 0 rgba(0,0,0,0.75),
\t\t\t\t-1px  1px 0 rgba(0,0,0,0.75),
\t\t\t\t 1px  1px 0 rgba(0,0,0,0.75);
\t\t\t  -webkit-font-smoothing: antialiased;
\t\t\t  -moz-osx-font-smoothing: grayscale;
\t\t\t}
\t\t\t
\t\t\t.fc-event .fc-event-title .emoji-char {
\t\t\t\ttext-shadow: none !important;
\t\t\t\tdisplay: inline-block;
\t\t\t\tline-height: 1;
\t\t\t\tvertical-align: middle;
\t\t\t}
\t\t\t
\t\t\t.color-swatch {
\t\t\t  width:32px;
\t\t\t  height:22px;
\t\t\t  border-radius:6px;
\t\t\t  border:1px solid rgba(0,0,0,0.08);
\t\t\t  box-shadow: inset 0 1px 0 rgba(255,255,255,0.12);
\t\t\t  display: inline-block;
\t\t\t}
\t\t\t.badge { font-size:0.78rem; }
\t\t\t
\t\t\t</style>
\t\t
\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 93
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 98
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  339 => 98,  317 => 93,  272 => 13,  259 => 12,  236 => 6,  198 => 122,  194 => 121,  190 => 120,  167 => 100,  162 => 99,  160 => 98,  154 => 94,  152 => 93,  149 => 92,  143 => 91,  132 => 89,  127 => 88,  123 => 87,  113 => 80,  109 => 79,  103 => 76,  73 => 49,  70 => 48,  68 => 12,  59 => 6,  52 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <title>{% block title %}Dispensa{% endblock %}</title>

        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"\" crossorigin=\"anonymous\">
\t\t<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/@yaireo/tagify/dist/tagify.css\">
\t\t<script src=\"https://cdn.jsdelivr.net/npm/@yaireo/tagify\"></script>

        {% block stylesheets %}
\t\t\t<style>
\t\t\t.fc-event, 
\t\t\t.fc-event * ,
\t\t\t.fc-daygrid-event .fc-event-title,     /* FullCalendar dayGrid */
\t\t\t.fc-timegrid-event .fc-event-title,    /* FullCalendar timeGrid */
\t\t\t.fc-list-event .fc-event-title {       /* FullCalendar list view */
\t\t\t  text-shadow:
\t\t\t\t-1px -1px 0 rgba(0,0,0,0.75),
\t\t\t\t 1px -1px 0 rgba(0,0,0,0.75),
\t\t\t\t-1px  1px 0 rgba(0,0,0,0.75),
\t\t\t\t 1px  1px 0 rgba(0,0,0,0.75);
\t\t\t  -webkit-font-smoothing: antialiased;
\t\t\t  -moz-osx-font-smoothing: grayscale;
\t\t\t}
\t\t\t
\t\t\t.fc-event .fc-event-title .emoji-char {
\t\t\t\ttext-shadow: none !important;
\t\t\t\tdisplay: inline-block;
\t\t\t\tline-height: 1;
\t\t\t\tvertical-align: middle;
\t\t\t}
\t\t\t
\t\t\t.color-swatch {
\t\t\t  width:32px;
\t\t\t  height:22px;
\t\t\t  border-radius:6px;
\t\t\t  border:1px solid rgba(0,0,0,0.08);
\t\t\t  box-shadow: inset 0 1px 0 rgba(255,255,255,0.12);
\t\t\t  display: inline-block;
\t\t\t}
\t\t\t.badge { font-size:0.78rem; }
\t\t\t
\t\t\t</style>
\t\t
\t\t{% endblock %}
\t\t
\t\t{{ encore_entry_link_tags('app') }}
\t\t<style>
\t\t.palette-inline, #colorPalette {
\t\t  position: relative !important;
\t\t  z-index: 99999 !important;
\t\t  pointer-events: auto !important;
\t\t}

\t\t.palette-inline .swatch,
\t\t.palette-inline .gray-swatch,
\t\t.palette-inline button {
\t\t  pointer-events: auto !important;
\t\t}

\t\t.picmo, .picmo-popup, .picmo-picker, .picmo-popup-picker, .picmo__picker {
\t\t  z-index: 100000 !important;
\t\t  position: fixed !important;
\t\t  pointer-events: auto !important;
\t\t}

\t\t.navbar { z-index: 1000; } 
\t\t</style>

    </head>
    <body class=\"bg-light\">
        <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark mb-4\">
            <div class=\"container\">
                <a class=\"navbar-brand\" href=\"{{ path('app_home') }}\">Dispensa</a>
                <div class=\"collapse navbar-collapse\">
                    <ul class=\"navbar-nav ms-auto\">
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"{{ path('app_prodotto_index') }}\">Prodotti</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"{{ path('app_scadenze_index') }}\">Scadenze</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <main class=\"container\">
            {% for label, messages in app.flashes %}
                {% for message in messages %}
                    <div class=\"alert alert-{{ label }}\">{{ message }}</div>
                {% endfor %}
            {% endfor %}

            {% block body %}{% endblock %}
        </main>

\t\t<script src=\"https://cdn.jsdelivr.net/npm/flatpickr\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js\" integrity=\"\" crossorigin=\"anonymous\"></script>
        {% block javascripts %}{% endblock %}
\t\t{{ encore_entry_script_tags('app') }}
\t\t<script src=\"{{ asset('build/app.js') }}\"></script>
\t\t<script>
\t\tdocument.addEventListener('click', function(e){
\t\t  const btn = e.target.closest('button[data-confirm], a[data-confirm]');
\t\t  if(!btn) return;
\t\t  const form = btn.closest('form');
\t\t  const msg = btn.getAttribute('data-confirm');
\t\t  if(!msg) return;
\t\t  e.preventDefault();
\t\t  if (confirm(msg)) {
\t\t\tif (form) form.submit();
\t\t\telse {
\t\t\t  const href = btn.getAttribute('href');
\t\t\t  if (href) window.location = href;
\t\t\t}
\t\t  }
\t\t});
\t\t</script>

<script>
  window.__prodFragmentUrlTemplate = '{{ path(\"app_prodotto_fragment\", {\"id\": 0}) }}';
  window.__prodShowUrlTemplate     = '{{ path(\"app_prodotto_show\", {\"id\": 0}) }}';
  window.__appBasePath = '{{ app.request.basePath }}';
</script>


<div class=\"modal fade\" id=\"modalShowProduct\" tabindex=\"-1\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\">Dettaglio prodotto</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Chiudi\"></button>
      </div>
      <div class=\"modal-body\" id=\"modalShowProductBody\">
        <div class=\"text-center py-4\">
          <div class=\"spinner-border\" role=\"status\"><span class=\"visually-hidden\">Caricamento...</span></div>
        </div>
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Chiudi</button>
      </div>
    </div>
  </div>
</div>


    </body>
</html>
", "base.html.twig", "C:\\xampp\\htdocs\\pantry\\templates\\base.html.twig");
    }
}
