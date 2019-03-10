<?php

/* board.html.twig */
class __TwigTemplate_0a3a74922b0c88c4be7240e623661d55a9cf8bb4da6397d8d52a18626bd17685 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<ul>
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["board"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["trustee"]) {
            // line 3
            echo "    <li>
        <figure>
            <img src = \"";
            // line 5
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trustee"], "image", []), "html", null, true);
            echo "\"
                 alt = \"Portrait of ";
            // line 6
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trustee"], "name", []), "html", null, true);
            echo "\">
            <figcaption>
                <a href = \"";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trustee"], "cv", []), "html", null, true);
            echo "\"
                   download = \"CV of ";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trustee"], "name", []), "html", null, true);
            echo ".pdf\">
                    ";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trustee"], "name", []), "html", null, true);
            echo "
                </a>
            </figcaption>
        </figure>
    </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trustee'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "</ul>";
    }

    public function getTemplateName()
    {
        return "board.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 16,  51 => 10,  47 => 9,  43 => 8,  38 => 6,  34 => 5,  30 => 3,  26 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "board.html.twig", "/home/rmunodawafa/Documents/Software/amasango/src/View/board.html.twig");
    }
}
