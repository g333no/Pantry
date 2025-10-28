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

/* prodotto/index.html.twig */
class __TwigTemplate_9bec6c6a347023c88736ee6b5df26a09 extends Template
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
        yield "Prodotti";
        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 6
        yield "<h1>Prodotti</h1>


<form id=\"sortForm\" method=\"get\" class=\"d-flex align-items-center gap-2 mb-3\">
  <label for=\"sortSelect\" class=\"form-label mb-0\">Ordina per:</label>

  <select id=\"sortSelect\" name=\"sort\" class=\"form-select form-select-sm\" style=\"width:auto;\">
    <option value=\"nome\"      ";
        // line 13
        yield (((($context["current_sort"] ?? null) == "nome")) ? ("selected") : (""));
        yield ">Nome</option>
    <option value=\"quantita\"  ";
        // line 14
        yield (((($context["current_sort"] ?? null) == "quantita")) ? ("selected") : (""));
        yield ">Quantità</option>
    <option value=\"createdAt\" ";
        // line 15
        yield (((($context["current_sort"] ?? null) == "createdAt")) ? ("selected") : (""));
        yield ">Data aggiunta</option>
    <option value=\"scadenza\"  ";
        // line 16
        yield (((($context["current_sort"] ?? null) == "scadenza")) ? ("selected") : (""));
        yield ">Scadenza</option>
    <option value=\"categoria\" ";
        // line 17
        yield (((($context["current_sort"] ?? null) == "categoria")) ? ("selected") : (""));
        yield ">Categoria</option>
  </select>

  <input type=\"hidden\" name=\"dir\" id=\"dirInput\" value=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("current_dir", $context)) ? (Twig\Extension\CoreExtension::default(($context["current_dir"] ?? null), "asc")) : ("asc")), "html", null, true);
        yield "\">

  <button type=\"button\" id=\"toggleDir\" class=\"btn btn-sm btn-outline-secondary\" title=\"Inverti ordine\">
    ";
        // line 23
        if ((Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["current_dir"] ?? null)) == "desc")) {
            // line 24
            yield "      <i class=\"bi bi-sort-alpha-down-alt\"></i> 🔻
    ";
        } else {
            // line 26
            yield "      <i class=\"bi bi-sort-alpha-down\"></i> 🔺
    ";
        }
        // line 28
        yield "  </button>
</form>

<div>
  <table class=\"table table-striped align-middle\">
      <thead>
          <tr>
              <th style=\"width:40px;\">
                <input type=\"checkbox\" id=\"selectAll\" title=\"Seleziona tutti\">
              </th>
              <th style=\"width:56px; text-align:center;\">Emoji</th>
              <th>Nome</th>
              <th style=\"width:110px;\">Quantità</th>
              <th style=\"width:160px;\">Data di creazione</th>
              <th style=\"width:120px;\">Scadenza</th>
              <th style=\"width:140px;\">Categoria</th>
              <th style=\"width:120px;\">Colore</th>
              <th>Tag</th>
              <th class=\"text-end\" style=\"white-space:nowrap;\">Actions</th>
          </tr>
      </thead>
      <tbody>
      ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["prodotti"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["prodotto"]) {
            // line 51
            yield "          <tr>
              <td>
                <input type=\"checkbox\" class=\"select-checkbox\" value=\"";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["prodotto"], "id", [], "any", false, false, false, 53), "html", null, true);
            yield "\" aria-label=\"Seleziona ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["prodotto"], "nome", [], "any", false, false, false, 53), "html", null, true);
            yield "\">
              </td>

              ";
            // line 57
            yield "              <td style=\"text-align:center; font-size:20px;\">
                ";
            // line 58
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["prodotto"], "emoji", [], "any", true, true, false, 58) && CoreExtension::getAttribute($this->env, $this->source, $context["prodotto"], "emoji", [], "any", false, false, false, 58))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["prodotto"], "emoji", [], "any", false, false, false, 58), "html", null, true)) : ("—"));
            yield "
              </td>

              <td>";
            // line 61
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["prodotto"], "nome", [], "any", true, true, false, 61)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["prodotto"], "nome", [], "any", false, false, false, 61), "html", null, true)) : (""));
            yield "</td>

              <td>";
            // line 63
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["prodotto"], "quantita", [], "any", true, true, false, 63)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["prodotto"], "quantita", [], "any", false, false, false, 63), "html", null, true)) : (0));
            yield "</td>

              <td>
                ";
            // line 66
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["prodotto"], "createdAt", [], "any", false, false, false, 66)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 67
                yield "                  ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["prodotto"], "createdAt", [], "any", false, false, false, 67), "Y-m-d H:i"), "html", null, true);
                yield "
                ";
            } else {
                // line 69
                yield "                  —
                ";
            }
            // line 71
            yield "              </td>

              <td>
                ";
            // line 74
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["prodotto"], "scadenza", [], "any", false, false, false, 74)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 75
                yield "                  ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["prodotto"], "scadenza", [], "any", false, false, false, 75), "Y-m-d"), "html", null, true);
                yield "
                ";
            } else {
                // line 77
                yield "                  —
                ";
            }
            // line 79
            yield "              </td>

              <td>";
            // line 81
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["prodotto"], "categoria", [], "any", true, true, false, 81)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["prodotto"], "categoria", [], "any", false, false, false, 81), "html", null, true)) : (""));
            yield "</td>

              <td>
\t\t\t\t";
            // line 84
            $context["hex"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["prodotto"], "colore", [], "any", true, true, false, 84) && CoreExtension::getAttribute($this->env, $this->source, $context["prodotto"], "colore", [], "any", false, false, false, 84))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["prodotto"], "colore", [], "any", false, false, false, 84)) : ("#ffffff"));
            // line 85
            yield "\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t  <div
\t\t\t\t\tclass=\"color-swatch\"
\t\t\t\t\tstyle=\"background: ";
            // line 88
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["hex"] ?? null), "html", null, true);
            yield ";\"
\t\t\t\t\ttitle=\"";
            // line 89
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["hex"] ?? null), "html", null, true);
            yield "\"
\t\t\t\t\trole=\"img\"
\t\t\t\t\taria-label=\"Colore ";
            // line 91
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["hex"] ?? null), "html", null, true);
            yield "\">
\t\t\t\t  </div>
\t\t\t\t  <span class=\"visually-hidden\">Colore ";
            // line 93
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["hex"] ?? null), "html", null, true);
            yield "</span>
\t\t\t\t</div>
              </td>

              <td>
                ";
            // line 98
            $context["tags"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["prodotto"], "tags", [], "any", true, true, false, 98)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["prodotto"], "tags", [], "any", false, false, false, 98)) : ([]));
            // line 99
            yield "\t\t\t\t";
            if ((array_key_exists("tags", $context) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["tags"] ?? null)) > 0))) {
                // line 100
                yield "\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["tags"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                    // line 101
                    yield "\t\t\t\t\t\t<span class=\"badge bg-secondary me-1\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), $context["tag"]), "html", null, true);
                    yield "</span>
\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['tag'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 103
                yield "\t\t\t\t";
            } else {
                // line 104
                yield "\t\t\t\t\t<span class=\"text-muted\">Nessun tag</span>
                ";
            }
            // line 106
            yield "              </td>

              <td class=\"text-end\" style=\"white-space:nowrap;\">
                <a href=\"";
            // line 109
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_prodotto_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["prodotto"], "id", [], "any", false, false, false, 109)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-outline-primary me-1\" title=\"Mostra\">
                  <i class=\"bi bi-eye\"></i> 🔍
                </a>

                <a href=\"";
            // line 113
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_prodotto_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["prodotto"], "id", [], "any", false, false, false, 113)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-outline-secondary me-1\" title=\"Modifica\">
                  <i class=\"bi bi-pencil\"></i> 📝
                </a>

                <form method=\"post\" action=\"";
            // line 117
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_prodotto_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["prodotto"], "id", [], "any", false, false, false, 117)]), "html", null, true);
            yield "\" class=\"d-inline\" style=\"display:inline;\">
                  <input type=\"hidden\" name=\"_token\" value=\"";
            // line 118
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["prodotto"], "id", [], "any", false, false, false, 118))), "html", null, true);
            yield "\">
                  <button type=\"submit\" class=\"btn btn-sm btn-outline-danger\" data-confirm=\"Sei sicuro di eliminare '";
            // line 119
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["prodotto"], "nome", [], "any", false, false, false, 119), "html", null, true);
            yield "'?\">
                    <i class=\"bi bi-trash\"></i> 💣
                  </button>
                </form>
              </td>
          </tr>
      ";
            $context['_iterated'] = true;
        }
        // line 125
        if (!$context['_iterated']) {
            // line 126
            yield "          <tr>
              <td colspan=\"10\">Nessun prodotto trovato</td>
          </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['prodotto'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 130
        yield "      </tbody>
  </table>
</div>


<div class=\"d-flex align-items-center gap-2\">
  <a href=\"";
        // line 136
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_prodotto_new");
        yield "\" class=\"btn btn-primary\">Crea nuovo prodotto</a>

  ";
        // line 138
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["prodotti"] ?? null)) > 0)) {
            // line 139
            yield "    <form method=\"post\" action=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_prodotto_delete_all");
            yield "\" style=\"display:inline;\" class=\"d-inline ms-2\">
      <input type=\"hidden\" name=\"_token\" value=\"";
            // line 140
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("delete_all_products"), "html", null, true);
            yield "\">
      <button type=\"submit\" class=\"btn btn-sm btn-outline-danger\" data-confirm=\"Sei sicuro di eliminare TUTTI i prodotti e le relative stock entry? Questa operazione è irreversibile.\">
        <i class=\"bi bi-trash-fill\"></i> Elimina tutti
      </button>
    </form>
  ";
        }
        // line 146
        yield "
  <button id=\"deleteSelectedBtn\" type=\"button\" class=\"btn btn-sm btn-danger ms-auto\" disabled>
    <i class=\"bi bi-trash\"></i> Elimina selezionati
  </button>
</div>

<form id=\"bulkDeleteForm\" method=\"post\" action=\"";
        // line 152
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_prodotto_delete_selected");
        yield "\" style=\"display:none;\">
  <input type=\"hidden\" name=\"_token\" value=\"";
        // line 153
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("delete_selected_products"), "html", null, true);
        yield "\">
</form>

<script>
document.addEventListener('DOMContentLoaded', function(){
  const selectAll = document.getElementById('selectAll');
  const checkboxes = Array.from(document.querySelectorAll('.select-checkbox'));
  const deleteBtn = document.getElementById('deleteSelectedBtn');
  const bulkForm = document.getElementById('bulkDeleteForm');

  function updateState() {
    const selected = document.querySelectorAll('.select-checkbox:checked').length;
    deleteBtn.disabled = selected === 0;
    deleteBtn.dataset.count = selected;
    deleteBtn.innerHTML = '<i class=\"bi bi-trash\"></i> Elimina selezionati' + (selected ? ' ('+selected+')' : '');
    if (!selectAll) return;
    if (selected === 0) selectAll.checked = false;
    else if (selected === checkboxes.length) { selectAll.checked = true; selectAll.indeterminate = false; }
    else { selectAll.checked = false; selectAll.indeterminate = true; }
  }

  updateState();

  if (selectAll) {
    selectAll.addEventListener('change', function(){
      const checked = !!this.checked;
      checkboxes.forEach(cb => { cb.checked = checked; });
      updateState();
    });
  }

  checkboxes.forEach(cb => cb.addEventListener('change', updateState));

  deleteBtn.addEventListener('click', function(e){
    const count = parseInt(this.dataset.count || 0, 10);
    if (count <= 0) return;
    const msg = `Sei sicuro di eliminare \${count} prodotto\${count>1?'i':''}? Questa operazione è irreversibile.`;
    if (!confirm(msg)) return;

    Array.from(bulkForm.querySelectorAll('input[name=\"selected_ids[]\"]')).forEach(n => n.remove());

    const selectedBoxes = Array.from(document.querySelectorAll('.select-checkbox:checked'));
    selectedBoxes.forEach(cb => {
      const input = document.createElement('input');
      input.type = 'hidden';
      input.name = 'selected_ids[]';
      input.value = cb.value;
      bulkForm.appendChild(input);
    });

    bulkForm.submit();
  });
});

document.addEventListener('DOMContentLoaded', function(){
  const sortSelect = document.getElementById('sortSelect');
  const dirInput = document.getElementById('dirInput');
  const toggleBtn = document.getElementById('toggleDir');
  const form = document.getElementById('sortForm');

  if (sortSelect) {
    sortSelect.addEventListener('change', function(){ form.submit(); });
  }

  if (toggleBtn) {
    toggleBtn.addEventListener('click', function(){
      const cur = (dirInput.value || 'asc').toLowerCase();
      dirInput.value = (cur === 'asc') ? 'desc' : 'asc';
      form.submit();
    });
  }
});
</script>

";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "prodotto/index.html.twig";
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
        return array (  362 => 153,  358 => 152,  350 => 146,  341 => 140,  336 => 139,  334 => 138,  329 => 136,  321 => 130,  312 => 126,  310 => 125,  299 => 119,  295 => 118,  291 => 117,  284 => 113,  277 => 109,  272 => 106,  268 => 104,  265 => 103,  256 => 101,  251 => 100,  248 => 99,  246 => 98,  238 => 93,  233 => 91,  228 => 89,  224 => 88,  219 => 85,  217 => 84,  211 => 81,  207 => 79,  203 => 77,  197 => 75,  195 => 74,  190 => 71,  186 => 69,  180 => 67,  178 => 66,  172 => 63,  167 => 61,  161 => 58,  158 => 57,  150 => 53,  146 => 51,  141 => 50,  117 => 28,  113 => 26,  109 => 24,  107 => 23,  101 => 20,  95 => 17,  91 => 16,  87 => 15,  83 => 14,  79 => 13,  70 => 6,  63 => 5,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "prodotto/index.html.twig", "C:\\xampp\\htdocs\\pantry\\templates\\prodotto\\index.html.twig");
    }
}
