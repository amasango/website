<?php

/* contacts.html.twig */
class __TwigTemplate_f61754e5177233157c1a308db3075c7bb4e288d41aff30146625603f59e4858b extends Twig_Template
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
        echo "<address>
    <table>
        <thead>
            <tr>
                <th>
                    Type
                </th>
                <th>
                    Contact
                </th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["contacts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
            // line 15
            echo "            <tr>
                <td>
                    ";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "type", []), "html", null, true);
            echo "
                </td>
                <td>
                    <a href = \"";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "url", []), "html", null, true);
            echo "\">
                        ";
            // line 21
            echo twig_get_attribute($this->env, $this->source, $context["contact"], "display", []);
            echo "
                    </a>
                </td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contact'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "        </tbody>
    </table>
</address>";
    }

    public function getTemplateName()
    {
        return "contacts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 26,  56 => 21,  52 => 20,  46 => 17,  42 => 15,  38 => 14,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "contacts.html.twig", "/home/rmunodawafa/Documents/Software/amasango/src/View/contacts.html.twig");
    }
}
