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

/* scadenze/index.html.twig */
class __TwigTemplate_3ca1a8b745489a21bff3ff2e86d9d2a1 extends Template
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

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Scadenze (entro ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["days"] ?? null), "html", null, true);
        yield " giorni)";
        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 6
        yield "  ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
  <style>
    .hero-count {
      display:flex;
      align-items:center;
      gap:1rem;
      margin-bottom:1rem;
    }
\t.big-count-number {
\t  font-size: clamp(64px, 10vw, 160px);
\t  font-weight: 900;
\t  line-height: 0.95;
\t  display:inline-flex;
\t  align-items:center;
\t  justify-content:center;
\t  min-width: 120px;
\t  min-height: 120px;
\t  //padding: 0.15rem 0.6rem;
\t  letter-spacing: -1px;
\t  -webkit-font-smoothing:antialiased;
\t  -moz-osx-font-smoothing:grayscale;
\t  text-shadow: 0 2px 0 rgba(255,255,255,0.07), 0 10px 30px rgba(0,0,0,0.12);
\t}
\t@media (max-width:640px) {
\t  .big-count-number {
\t\tfont-size: clamp(48px, 16vw, 96px);
\t\tmin-width: 88px;
\t\tmin-height: 88px;
\t  }
\t}

    .small-metrics { color:#6c757d; }
    .expiry-badge { padding:.35rem .5rem; border-radius:8px; font-weight:600; }
    .expiry-badge.expired { background:#e74c3c; color:#fff; }
    .expiry-badge.soon { background:#f39c12; color:#fff; }
    .expiry-badge.ok { background:#6bbf59; color:#fff; }
    .tbl-row-expired { background: rgba(231,76,60,0.06); }
    .tbl-row-soon { background: rgba(243,156,18,0.04); }
  </style>
";
        yield from [];
    }

    // line 47
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 48
        yield "<div class=\"container\" style=\"max-width:1100px; margin:1.2rem auto;\">
  <div class=\"d-flex justify-content-between align-items-start mb-3\">
    <div>
      <h1 class=\"h4 mb-1\">Scadenze (entro ";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["days"] ?? null), "html", null, true);
        yield " giorni)</h1>
      <div class=\"small text-muted\">Elenco delle stock entry in scadenza. Filtra il range con il controllo sotto.</div>
    </div>

    <div class=\"text-end hero-count\">
\t\t<div class=\"big-count-number\"
\t\t\t style=\"color: ";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("bigCountTextColor", $context)) ? (Twig\Extension\CoreExtension::default(($context["bigCountTextColor"] ?? null), "#222")) : ("#222")), "html", null, true);
        yield " !important; line-height:1; -webkit-text-stroke: 0.4px rgba(0,0,0,0.06);\">
\t\t  <span style=\"color: ";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("bigCountColor", $context)) ? (Twig\Extension\CoreExtension::default(($context["bigCountColor"] ?? null), "#333")) : ("#333")), "html", null, true);
        yield ";\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["expiring_next_3_unique_products"] ?? null), "html", null, true);
        yield "</span>
\t\t</div>

      <div class=\"small-metrics\">
        <div class=\"fw-bold\">";
        // line 62
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["expiring_next_3_entries"] ?? null), "html", null, true);
        yield " voci in scadenza (3 giorni)</div>
        <div class=\"text-muted\">Prodotti distinti in scadenza: <strong>";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["expiring_next_3_unique_products"] ?? null), "html", null, true);
        yield "</strong></div>
      </div>
    </div>
  </div>

  <div class=\"card p-3 mb-3\">
    <form method=\"get\" class=\"row gx-2 gy-2 align-items-center\">
      <div class=\"col-auto\">
        <label for=\"days\" class=\"form-label mb-0 small\">Mostra entro (giorni)</label>
        <input id=\"days\" name=\"days\" type=\"number\" class=\"form-control\" value=\"";
        // line 72
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["days"] ?? null), "html", null, true);
        yield "\" min=\"1\" style=\"width:120px\" />
      </div>
      <div class=\"col-auto\">
        <label class=\"form-label mb-0 small\">&nbsp;</label>
        <div><button type=\"submit\" class=\"btn btn-primary\">Aggiorna</button></div>
      </div>

      <div class=\"col\"></div>

      <div class=\"col-auto text-end\">
        <a class=\"btn btn-outline-secondary btn-sm\" href=\"";
        // line 82
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_prodotto_index");
        yield "\">Torna ai prodotti</a>
      </div>
    </form>
  </div>

  ";
        // line 87
        if (Twig\Extension\CoreExtension::testEmpty(($context["entries"] ?? null))) {
            // line 88
            yield "    <div class=\"alert alert-info\">Nessuna scadenza trovata nei prossimi ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["days"] ?? null), "html", null, true);
            yield " giorni.</div>
  ";
        } else {
            // line 90
            yield "    <div class=\"table-responsive\">
      <table class=\"table align-middle\">
        <thead>
          <tr>
            <th>Prodotto</th>
            <th>Categoria</th>
            <th>Tag</th>
            <th>Quantità</th>
            <th>Scadenza</th>
            <th>Gg restanti</th>
            <th>Azioni</th>
          </tr>
        </thead>
        <tbody>
          ";
            // line 104
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["entries"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
                // line 105
                yield "            ";
                $context["daysTo"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["e"], "daysTo", [], "any", true, true, false, 105) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["e"], "daysTo", [], "any", false, false, false, 105)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["e"], "daysTo", [], "any", false, false, false, 105)) : (9999));
                // line 106
                yield "            ";
                $context["rowClass"] = (((($context["daysTo"] ?? null) < 0)) ? ("tbl-row-expired") : ((((($context["daysTo"] ?? null) <= 3)) ? ("tbl-row-soon") : (""))));
                // line 107
                yield "            <tr class=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rowClass"] ?? null), "html", null, true);
                yield "\">
              <td>
                <div class=\"d-flex align-items-center gap-3\">
                  <div>
                    <strong>";
                // line 111
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["e"], "prodotto", [], "any", false, false, false, 111)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["e"], "prodotto", [], "any", false, true, false, 111), "getNome", [], "any", true, true, false, 111)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["e"], "prodotto", [], "any", false, false, false, 111), "getNome", [], "method", false, false, false, 111), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["e"], "prodotto", [], "any", false, false, false, 111), "nome", [], "any", false, false, false, 111), "html", null, true)))) : ("—"));
                yield "</strong>
                    <div class=\"small text-muted\">";
                // line 112
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["e"], "prodotto", [], "any", false, false, false, 112)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["e"], "prodotto", [], "any", false, true, false, 112), "getDescrizione", [], "any", true, true, false, 112)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["e"], "prodotto", [], "any", false, false, false, 112), "getDescrizione", [], "method", false, false, false, 112))), 0, 80), "html", null, true)) : (""))) : (""));
                yield "</div>
                  </div>
                </div>
              </td>

              <td>
                ";
                // line 118
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["e"], "categoria", [], "any", false, false, false, 118)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 119
                    yield "                  <span class=\"badge bg-secondary\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["e"], "categoria", [], "any", false, false, false, 119), "html", null, true);
                    yield "</span>
                ";
                } else {
                    // line 121
                    yield "                  <span class=\"text-muted\">Nessuna Categoria</span>
                ";
                }
                // line 123
                yield "              </td>

\t\t\t\t<td>
\t\t\t\t  ";
                // line 126
                $context["tags"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["e"], "tags", [], "any", true, true, false, 126)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["e"], "tags", [], "any", false, false, false, 126)) : ([]));
                // line 127
                yield "\t\t\t\t  ";
                if ((is_iterable(($context["tags"] ?? null)) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["tags"] ?? null)) > 0))) {
                    // line 128
                    yield "\t\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(($context["tags"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
                        // line 129
                        yield "\t\t\t\t\t  <span class=\"badge bg-secondary me-1\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["t"], "html", null, true);
                        yield "</span>
\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['t'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 131
                    yield "\t\t\t\t  ";
                } else {
                    // line 132
                    yield "\t\t\t\t\t<span class=\"text-muted\">Nessun tag</span>
\t\t\t\t  ";
                }
                // line 134
                yield "\t\t\t\t</td>

              <td>";
                // line 136
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["e"], "quantita", [], "any", true, true, false, 136)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["e"], "quantita", [], "any", false, false, false, 136), "html", null, true)) : ("—"));
                yield "</td>
              <td>";
                // line 137
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["e"], "scadenza", [], "any", false, false, false, 137)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["e"], "scadenza", [], "any", false, false, false, 137), "html", null, true)) : ("—"));
                yield "</td>

              <td>
                ";
                // line 140
                if ((($context["daysTo"] ?? null) < 0)) {
                    // line 141
                    yield "                  <span class=\"expiry-badge expired\">Scaduto</span>
                ";
                } elseif ((                // line 142
($context["daysTo"] ?? null) == 0)) {
                    // line 143
                    yield "                  <span class=\"expiry-badge soon\">Oggi</span>
                ";
                } elseif ((                // line 144
($context["daysTo"] ?? null) == 1)) {
                    // line 145
                    yield "                  <span class=\"expiry-badge soon\">1 giorno</span>
                ";
                } elseif ((                // line 146
($context["daysTo"] ?? null) <= 3)) {
                    // line 147
                    yield "                  <span class=\"expiry-badge soon\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["daysTo"] ?? null), "html", null, true);
                    yield " giorni</span>
                ";
                } else {
                    // line 149
                    yield "                  <span class=\"expiry-badge ok\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["daysTo"] ?? null), "html", null, true);
                    yield " giorni</span>
                ";
                }
                // line 151
                yield "              </td>

              <td>
                <a class=\"btn btn-sm btn-outline-primary\" href=\"";
                // line 154
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_prodotto_show", ["id" => (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["e"], "prodotto", [], "any", false, false, false, 154)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["e"], "prodotto", [], "any", false, false, false, 154), "getId", [], "any", false, false, false, 154)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["e"], "prodotto", [], "any", false, false, false, 154), "getId", [], "method", false, false, false, 154)) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["e"], "prodotto", [], "any", false, false, false, 154), "id", [], "any", false, false, false, 154)))) : (0))]), "html", null, true);
                yield "\">Dettaglio</a>
              </td>
            </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['e'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 158
            yield "        </tbody>
      </table>
    </div>
  ";
        }
        // line 162
        yield "</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "scadenze/index.html.twig";
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
        return array (  352 => 162,  346 => 158,  336 => 154,  331 => 151,  325 => 149,  319 => 147,  317 => 146,  314 => 145,  312 => 144,  309 => 143,  307 => 142,  304 => 141,  302 => 140,  296 => 137,  292 => 136,  288 => 134,  284 => 132,  281 => 131,  272 => 129,  267 => 128,  264 => 127,  262 => 126,  257 => 123,  253 => 121,  247 => 119,  245 => 118,  236 => 112,  232 => 111,  224 => 107,  221 => 106,  218 => 105,  214 => 104,  198 => 90,  192 => 88,  190 => 87,  182 => 82,  169 => 72,  157 => 63,  153 => 62,  144 => 58,  140 => 57,  131 => 51,  126 => 48,  119 => 47,  73 => 6,  66 => 5,  53 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "scadenze/index.html.twig", "C:\\xampp\\htdocs\\pantry\\templates\\scadenze\\index.html.twig");
    }
}
