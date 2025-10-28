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

/* prodotto/_form.html.twig */
class __TwigTemplate_b5e11b84f0a50cd86b87ee7739c4b449 extends Template
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
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["attr" => ["novalidate" => "novalidate", "class" => "needs-validation"]]);
        yield "
  ";
        // line 2
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        yield "

  <div class=\"row g-3\">
    <div class=\"col-12\">
\t\t<div class=\"mb-0\">
\t\t  ";
        // line 7
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "nome", [], "any", false, false, false, 7), 'label', ["label" => "Nome"]);
        yield "
\t\t  ";
        // line 8
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "nome", [], "any", false, false, false, 8), 'widget', ["attr" => ["placeholder" => "Es: Latte, Farina, Uova", "class" => ("form-control" . (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 11
($context["form"] ?? null), "nome", [], "any", false, false, false, 11), "vars", [], "any", false, false, false, 11), "valid", [], "any", false, false, false, 11)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("") : (" is-invalid")))]]);
        // line 13
        yield "
\t\t  <div class=\"form-error\">
\t\t\t";
        // line 15
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "nome", [], "any", false, false, false, 15), 'errors');
        yield "
\t\t  </div>
\t\t</div>
    </div>

    <div class=\"col-12\">
      <div class=\"row g-2 align-items-center\">
        <div class=\"col-12 col-md-6\">
\t\t\t<div class=\"\">
\t\t\t  ";
        // line 24
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "scadenza", [], "any", false, false, false, 24), 'label', ["label" => "Scadenza"]);
        yield "
\t\t\t  ";
        // line 25
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "scadenza", [], "any", false, false, false, 25), 'widget', ["attr" => ["class" => ("form-control" . (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 27
($context["form"] ?? null), "scadenza", [], "any", false, false, false, 27), "vars", [], "any", false, false, false, 27), "valid", [], "any", false, false, false, 27)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("") : (" is-invalid")))]]);
        // line 29
        yield "
\t\t\t  <div class=\"form-error\">
\t\t\t\t";
        // line 31
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "scadenza", [], "any", false, false, false, 31), 'errors');
        yield "
\t\t\t  </div>
\t\t\t</div>
        </div>
        <div class=\"col-6 col-md-2\">
\t\t\t<div class=\"\">
\t\t\t  ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "quantita", [], "any", false, false, false, 37), 'label', ["label" => "Quantità"]);
        yield "
\t\t\t  ";
        // line 38
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "quantita", [], "any", false, false, false, 38), 'widget', ["attr" => ["class" => ("form-control" . (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 40
($context["form"] ?? null), "quantita", [], "any", false, false, false, 40), "vars", [], "any", false, false, false, 40), "valid", [], "any", false, false, false, 40)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("") : (" is-invalid"))), "min" => "0", "step" => "1", "inputmode" => "numeric", "pattern" => "\\d*"]]);
        // line 46
        yield "
\t\t\t  <div class=\"form-error\">
\t\t\t\t";
        // line 48
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "quantita", [], "any", false, false, false, 48), 'errors');
        yield "
\t\t\t  </div>
\t\t\t</div>
        </div>
        <div class=\"col-6 col-md-4 d-none d-md-block\"></div>
      </div>
    </div>

    <div class=\"col-12\">
      <div class=\"row g-2\">
        <div class=\"col-12 col-md-5\">
          <label class=\"form-label\" for=\"categoriaSelect\">Categoria</label>

\t\t";
        // line 61
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "categoria", [], "any", false, false, false, 61), 'widget', ["attr" => ["id" => "categoriaSelect", "class" => "form-select"]]);
        yield "
\t\t<div class=\"form-error\">";
        // line 62
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "categoria", [], "any", false, false, false, 62), 'errors');
        yield "</div>

\t\t<div id=\"categoriaCustomWrap\" style=\"display:none;\">
\t\t  ";
        // line 65
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "categoria_custom", [], "any", false, false, false, 65), 'widget', ["attr" => ["id" => "categoriaCustom", "class" => "form-control mt-2"], "label" => false]);
        // line 68
        yield "
\t\t  <div class=\"form-error\">";
        // line 69
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "categoria_custom", [], "any", false, false, false, 69), 'errors');
        yield "</div>
\t\t</div>

          <div class=\"form-text d-md-none\">Seleziona una categoria oppure scegli \"Altro\" per inserire una nuova categoria.</div>
        </div>

\t\t<div class=\"mb-3\">
\t\t  ";
        // line 76
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "tags_input", [], "any", false, false, false, 76), 'label', ["label" => "Tag"]);
        yield "
\t\t  ";
        // line 77
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "tags_input", [], "any", false, false, false, 77), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "es: senza glutine, bio, senza lattosio"]]);
        // line 79
        yield "
\t\t  <div class=\"form-text\">Separa i tag con una virgola.</div>
\t\t  <div class=\"form-error\">";
        // line 81
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "tags_input", [], "any", false, false, false, 81), 'errors');
        yield "</div>
\t\t</div>

        <div class=\"col-12 col-md-7\">
          <label class=\"form-label d-md-block d-none\">Colore & Emoji</label>

          <div class=\"d-flex align-items-start gap-3\">
            <div class=\"d-flex flex-column align-items-center\">
              ";
        // line 89
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "colore", [], "any", false, false, false, 89), 'widget', ["attr" => ["id" => "colorHidden", "style" => "display:none"]]);
        yield "
              <button type=\"button\" id=\"colorPreviewBtn\" class=\"btn p-0\" aria-haspopup=\"true\"
                      style=\"width:52px;height:52px;border-radius:10px;border:1px solid #ddd;background:";
        // line 91
        yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "colore", [], "any", false, false, false, 91), "vars", [], "any", false, false, false, 91), "value", [], "any", false, false, false, 91)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "colore", [], "any", false, false, false, 91), "vars", [], "any", false, false, false, 91), "value", [], "any", false, false, false, 91), "html", null, true)) : ("#ffffff"));
        yield ";\">
              </button>
\t\t\t  <div class=\"form-error\">";
        // line 93
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "colore", [], "any", false, false, false, 93), 'errors');
        yield "</div>
              <div class=\"small mt-2\" id=\"colorName\" style=\"min-width:120px;text-align:center;\">
                ";
        // line 95
        yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "colore", [], "any", false, false, false, 95), "vars", [], "any", false, false, false, 95), "value", [], "any", false, false, false, 95)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "colore", [], "any", false, false, false, 95), "vars", [], "any", false, false, false, 95), "value", [], "any", false, false, false, 95), "html", null, true)) : ("Bianco"));
        yield "
              </div>
            </div>

            <div class=\"d-flex flex-column align-items-center\">
              ";
        // line 100
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "emoji", [], "any", false, false, false, 100), 'widget', ["attr" => ["id" => "emojiHidden", "style" => "display:none"]]);
        yield "
              <button type=\"button\" id=\"emojiPreviewBtn\" class=\"btn btn-light\" style=\"width:52px;height:52px;border-radius:10px;border:1px solid #ddd;font-size:22px;\">
                ";
        // line 102
        yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "emoji", [], "any", false, false, false, 102), "vars", [], "any", false, false, false, 102), "value", [], "any", false, false, false, 102)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "emoji", [], "any", false, false, false, 102), "vars", [], "any", false, false, false, 102), "value", [], "any", false, false, false, 102), "html", null, true)) : ("😀"));
        yield "
              </button>
\t\t\t  <div class=\"form-error\">";
        // line 104
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "emoji", [], "any", false, false, false, 104), 'errors');
        yield "</div>
              <div class=\"small mt-2\" id=\"emojiLabel\">";
        // line 105
        yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "emoji", [], "any", false, false, false, 105), "vars", [], "any", false, false, false, 105), "value", [], "any", false, false, false, 105)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "emoji", [], "any", false, false, false, 105), "vars", [], "any", false, false, false, 105), "value", [], "any", false, false, false, 105), "html", null, true)) : ("Nessuna"));
        yield "</div>
            </div>

            <div class=\"flex-grow-1 d-flex align-items-center d-none d-md-flex\">
              ";
        // line 110
        yield "              <div class=\"form-text\">&nbsp;</div>
            </div>
          </div>

          <div id=\"colorPalette\" class=\"card p-3 mt-3\" style=\"display:none; max-width:100%; overflow:auto;\">
            <div id=\"grayGrid\" style=\"display:grid; grid-template-columns:repeat(32,20px); gap:6px; margin-bottom:10px;\"></div>
            <div id=\"colorGrid\" style=\"display:grid; gap:6px; grid-template-columns:repeat(32,20px);\"></div>
            <div class=\"mt-2 d-flex justify-content-end\">
              <button type=\"button\" id=\"closePalette\" class=\"btn btn-sm btn-outline-primary\">Chiudi</button>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <div class=\"mt-4 d-flex gap-2\">
    <button class=\"btn btn-primary\" type=\"submit\">";
        // line 128
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default(($context["button_label"] ?? null), "Save")) : ("Save")), "html", null, true);
        yield "</button>
    <a href=\"";
        // line 129
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_prodotto_index");
        yield "\" class=\"btn btn-outline-secondary\">Annulla</a>
  </div>

";
        // line 132
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        yield "

<style>
  .swatch, .gray-swatch { width:20px;height:20px;border-radius:4px;border:1px solid rgba(0,0,0,0.06);cursor:pointer;box-sizing:border-box; }
  .swatch.selected, .gray-swatch.selected { outline:2px solid rgba(0,0,0,0.12); box-shadow:0 0 0 3px rgba(255,255,255,0.4) inset; }
  @media (max-width:640px) {
    #colorGrid { grid-template-columns:repeat(16,20px) !important; }
    #grayGrid { grid-template-columns:repeat(16,20px) !important; }
  }

  input[type=number].form-control {
    max-width: 9rem;
  }
  
\t.form-error {
\t  color: #b64848;
\t  font-size: .9rem;
\t  margin-top: .25rem;
\t}
\t.is-invalid { border-color: #dc3545 !important; box-shadow: none !important; }
\t.invalid-feedback { display:block; color:#dc3545; font-size:.875rem; margin-top:.25rem; }

\t#colorPreviewBtn.is-invalid, #emojiPreviewBtn.is-invalid { outline: 2px solid rgba(220,53,69,0.16); }

</style>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "prodotto/_form.html.twig";
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
        return array (  244 => 132,  238 => 129,  234 => 128,  214 => 110,  207 => 105,  203 => 104,  198 => 102,  193 => 100,  185 => 95,  180 => 93,  175 => 91,  170 => 89,  159 => 81,  155 => 79,  153 => 77,  149 => 76,  139 => 69,  136 => 68,  134 => 65,  128 => 62,  124 => 61,  108 => 48,  104 => 46,  102 => 40,  101 => 38,  97 => 37,  88 => 31,  84 => 29,  82 => 27,  81 => 25,  77 => 24,  65 => 15,  61 => 13,  59 => 11,  58 => 8,  54 => 7,  46 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "prodotto/_form.html.twig", "C:\\xampp\\htdocs\\pantry\\templates\\prodotto\\_form.html.twig");
    }
}
