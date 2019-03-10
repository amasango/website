<?php

/* page.html.twig */
class __TwigTemplate_c01c7cb23da21df6323037f9bc0dbf3501349728ad3f8ec29e040c4c0164c863 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html lang=\"en-GB\">
    <head>
        <title>
            ";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "heading", []), "html", null, true);
        echo " | Amasango
        </title>
        ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "stylesheets", []));
        foreach ($context['_seq'] as $context["_key"] => $context["stylesheet"]) {
            // line 8
            echo "        <link rel = \"stylesheet\"
              href = \"";
            // line 9
            echo twig_escape_filter($this->env, $context["stylesheet"], "html", null, true);
            echo "\">
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stylesheet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "        <link rel = \"icon\"
              href = \"";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "icon", []), "html", null, true);
        echo "\">
    </head>
    <body id = \"content\">
        <header>
            <a href = \"";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", []), "urn", []), "html", null, true);
        echo "\">
                <img src = \"";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", []), "image", []), "src", []), "html", null, true);
        echo "\"
                     alt = \"";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", []), "image", []), "alt", []), "html", null, true);
        echo "\">
            </a>
            <nav>
                <ul>
                    ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "nav", []));
        foreach ($context['_seq'] as $context["label"] => $context["urn"]) {
            // line 23
            echo "                    <li>
                        <a href = \"";
            // line 24
            echo twig_escape_filter($this->env, $context["urn"], "html", null, true);
            echo "\">
                            ";
            // line 25
            echo twig_escape_filter($this->env, $context["label"], "html", null, true);
            echo "
                        </a>
                    </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['urn'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "                </ul>
            </nav>
            <h1>
                ";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "heading", []), "html", null, true);
        echo "
            </h1>
        </header>
        <main>
            <nav>
                <ul>
                    ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "main", []));
        foreach ($context['_seq'] as $context["_key"] => $context["content"]) {
            // line 39
            echo "                    <li>
                        <a href = \"#";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["content"], "urn", []), "html", null, true);
            echo "\">
                            ";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["content"], "heading", []), "html", null, true);
            echo "
                        </a>
                    </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['content'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "                </ul>
            </nav>
            <section>
                ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "main", []));
        foreach ($context['_seq'] as $context["_key"] => $context["content"]) {
            // line 49
            echo "                <article id = \"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["content"], "urn", []), "html", null, true);
            echo "\">
                    <h2>
                        ";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["content"], "heading", []), "html", null, true);
            echo "
                    </h2>
                    <section>
                        ";
            // line 54
            echo twig_get_attribute($this->env, $this->source, $context["content"], "body", []);
            echo "
                    </section>
                </article>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['content'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "            </section>
        </main>
        <footer>
            <nav>
                <ul>
                    ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", []), "nav", []));
        foreach ($context['_seq'] as $context["label"] => $context["urn"]) {
            // line 64
            echo "                    <li>
                        <a href = \"";
            // line 65
            echo twig_escape_filter($this->env, $context["urn"], "html", null, true);
            echo "\">
                            ";
            // line 66
            echo twig_escape_filter($this->env, $context["label"], "html", null, true);
            echo "
                        </a>
                    </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['urn'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "                </ul>
            </nav>
            <small>
                ";
        // line 73
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", []), "small", []), "html", null, true);
        echo "
            </small>
        </footer>
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 73,  189 => 70,  179 => 66,  175 => 65,  172 => 64,  168 => 63,  161 => 58,  151 => 54,  145 => 51,  139 => 49,  135 => 48,  130 => 45,  120 => 41,  116 => 40,  113 => 39,  109 => 38,  100 => 32,  95 => 29,  85 => 25,  81 => 24,  78 => 23,  74 => 22,  67 => 18,  63 => 17,  59 => 16,  52 => 12,  49 => 11,  41 => 9,  38 => 8,  34 => 7,  29 => 5,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "page.html.twig", "/home/rmunodawafa/Documents/Software/amasango/src/View/page.html.twig");
    }
}
