<?php

/* forms/fields/pages/pages.html.twig */
class __TwigTemplate_f744da97a7a1a6d2e67cf0748180b2b063a880984153cee985ac39aafc5d50fe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("forms/field.html.twig", "forms/fields/pages/pages.html.twig", 1);
        $this->blocks = array(
            'global_attributes' => array($this, 'block_global_attributes'),
            'input' => array($this, 'block_input'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "forms/field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 32
    public function block_global_attributes($context, array $blocks = array())
    {
        // line 33
        echo "    data-grav-selectize=\"";
        echo twig_escape_filter($this->env, twig_jsonencode_filter((($this->getAttribute(($context["field"] ?? null), "selectize", array(), "any", true, true)) ? ($this->getAttribute(($context["field"] ?? null), "selectize", array())) : (array()))), "html_attr");
        echo "\"
    data-grav-field=\"select\"
    data-grav-disabled=\"";
        // line 35
        echo (((null === ($context["originalValue"] ?? null))) ? ("true") : ("false"));
        echo "\"
    data-grav-default=\"";
        // line 36
        echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute(($context["field"] ?? null), "default", array())), "html_attr");
        echo "\"
";
    }

    // line 39
    public function block_input($context, array $blocks = array())
    {
        // line 40
        echo "    <div class=\"form-select-wrapper ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "size", array()), "html", null, true);
        echo "\">
        <select class=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "classes", array()), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->fieldNameFilter((($context["scope"] ?? null) . $this->getAttribute(($context["field"] ?? null), "name", array()))) . (($this->getAttribute(($context["field"] ?? null), "multiple", array())) ? ("[]") : (""))), "html", null, true);
        echo "\"
                ";
        // line 42
        if (twig_in_filter($this->getAttribute(($context["field"] ?? null), "autofocus", array()), array(0 => "on", 1 => "true", 2 => 1))) {
            echo "autofocus=\"autofocus\"";
        }
        // line 43
        echo "                ";
        if (twig_in_filter($this->getAttribute(($context["field"] ?? null), "novalidate", array()), array(0 => "on", 1 => "true", 2 => 1))) {
            echo "novalidate=\"novalidate\"";
        }
        // line 44
        echo "                ";
        if (twig_in_filter($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", array()), "required", array()), array(0 => "on", 1 => "true", 2 => 1))) {
            echo "required=\"required\"";
        }
        // line 45
        echo "                ";
        if (twig_in_filter($this->getAttribute(($context["field"] ?? null), "multiple", array()), array(0 => "on", 1 => "true", 2 => 1))) {
            echo "multiple=\"multiple\"";
        }
        // line 46
        echo "                ";
        if (($this->getAttribute(($context["field"] ?? null), "disabled", array()) || ($context["isDisabledToggleable"] ?? null))) {
            echo "disabled=\"disabled\"";
        }
        // line 47
        echo "                >
            ";
        // line 48
        echo $this->getAttribute($this, "options", array(0 => ($context["field"] ?? null), 1 => ($context["pages"] ?? null), 2 => ($context["value"] ?? null), 3 => 0), "method");
        echo "
        </select>
    </div>
";
    }

    // line 3
    public function getoptions($__field__ = null, $__pages__ = null, $__value__ = null, $__depth__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "field" => $__field__,
            "pages" => $__pages__,
            "value" => $__value__,
            "depth" => $__depth__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 4
            echo "
    ";
            // line 5
            if (($this->getAttribute(($context["field"] ?? null), "options", array()) && (($context["depth"] ?? null) == 0))) {
                // line 6
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["field"] ?? null), "options", array()));
                foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                    // line 7
                    echo "            <option value=\"";
                    echo twig_escape_filter($this->env, $context["key"], "html_attr");
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($context["value"]), "html", null, true);
                    echo "</option>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 9
                echo "    ";
            }
            // line 10
            echo "
    ";
            // line 11
            if (($this->getAttribute(($context["field"] ?? null), "show_root", array()) && (($context["depth"] ?? null) == 0))) {
                // line 12
                echo "        <option value=\"/\">/ (Root)</option>
        ";
                // line 13
                $context["depth"] = (($context["depth"] ?? null) + 1);
                // line 14
                echo "    ";
            }
            // line 15
            echo "
    ";
            // line 16
            $context["indent"] = (((($context["depth"] ?? null) == 0)) ? ("") : (($this->env->getExtension('Grav\Common\Twig\TwigExtension')->repeatFunc("-", ($context["depth"] ?? null)) . " ")));
            // line 17
            echo "
    ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["pages"] ?? null), "children", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 19
                echo "        ";
                if (($this->getAttribute($context["page"], "routable", array(), "method") || $this->getAttribute(($context["field"] ?? null), "show_all", array()))) {
                    // line 20
                    echo "            <option ";
                    if ((($this->getAttribute($context["page"], "route", array()) == ($context["value"] ?? null)) || ($this->getAttribute(($context["field"] ?? null), "multiple", array()) && twig_in_filter($this->getAttribute($context["page"], "route", array()), ($context["value"] ?? null))))) {
                        echo "selected=\"selected\"";
                    }
                    echo " value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "route", array()), "html", null, true);
                    echo "\">
                ";
                    // line 21
                    echo twig_escape_filter($this->env, ($context["indent"] ?? null), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "menu", array()), "html", null, true);
                    echo "
            </option>
        ";
                }
                // line 24
                echo "        ";
                if (((twig_length_filter($this->env, $this->getAttribute($context["page"], "children", array())) > 0) && ($this->getAttribute(($context["field"] ?? null), "show_modular", array()) ||  !$this->getAttribute($context["page"], "modular", array(), "method")))) {
                    // line 25
                    echo "
            ";
                    // line 26
                    echo $this->getAttribute($this, "options", array(0 => ($context["field"] ?? null), 1 => $context["page"], 2 => ($context["value"] ?? null), 3 => (($context["depth"] ?? null) + 1)), "method");
                    echo "

        ";
                }
                // line 29
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "forms/fields/pages/pages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 29,  187 => 26,  184 => 25,  181 => 24,  173 => 21,  164 => 20,  161 => 19,  157 => 18,  154 => 17,  152 => 16,  149 => 15,  146 => 14,  144 => 13,  141 => 12,  139 => 11,  136 => 10,  133 => 9,  122 => 7,  117 => 6,  115 => 5,  112 => 4,  97 => 3,  89 => 48,  86 => 47,  81 => 46,  76 => 45,  71 => 44,  66 => 43,  62 => 42,  56 => 41,  51 => 40,  48 => 39,  42 => 36,  38 => 35,  32 => 33,  29 => 32,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"forms/field.html.twig\" %}

{% macro options(field, pages, value, depth) %}

    {% if field.options and depth == 0 %}
        {% for key, value in field.options %}
            <option value=\"{{ key|e('html_attr') }}\">{{ value|t }}</option>
        {% endfor %}
    {% endif %}

    {% if field.show_root and depth == 0 %}
        <option value=\"/\">/ (Root)</option>
        {% set depth = depth +1 %}
    {% endif %}

    {% set indent = depth == 0 ? '' : repeat('-',depth) ~ ' ' %}

    {% for page in pages.children %}
        {% if page.routable() or field.show_all  %}
            <option {% if page.route == value or (field.multiple and page.route in value) %}selected=\"selected\"{% endif %} value=\"{{ page.route }}\">
                {{indent}} {{ page.menu }}
            </option>
        {% endif %}
        {% if page.children|length > 0 and (field.show_modular or not page.modular()) %}

            {{ _self.options(field, page,value, depth + 1) }}

        {% endif %}
    {% endfor %}
{% endmacro %}

{% block global_attributes %}
    data-grav-selectize=\"{{ (field.selectize is defined ? field.selectize : {})|json_encode|e('html_attr') }}\"
    data-grav-field=\"select\"
    data-grav-disabled=\"{{ originalValue is null ? 'true' : 'false' }}\"
    data-grav-default=\"{{ field.default|json_encode|e('html_attr') }}\"
{% endblock %}

{% block input %}
    <div class=\"form-select-wrapper {{ field.size }}\">
        <select class=\"{{ field.classes }}\" name=\"{{ (scope ~ field.name)|fieldName ~ (field.multiple ? '[]' : '') }}\"
                {% if field.autofocus in ['on', 'true', 1] %}autofocus=\"autofocus\"{% endif %}
                {% if field.novalidate in ['on', 'true', 1] %}novalidate=\"novalidate\"{% endif %}
                {% if field.validate.required in ['on', 'true', 1] %}required=\"required\"{% endif %}
                {% if field.multiple in ['on', 'true', 1] %}multiple=\"multiple\"{% endif %}
                {% if field.disabled or isDisabledToggleable %}disabled=\"disabled\"{% endif %}
                >
            {{ _self.options(field,pages,value, 0) }}
        </select>
    </div>
{% endblock %}

", "forms/fields/pages/pages.html.twig", "/Users/twhitehead/Sites/grav-admin/user/plugins/admin/themes/grav/templates/forms/fields/pages/pages.html.twig");
    }
}
