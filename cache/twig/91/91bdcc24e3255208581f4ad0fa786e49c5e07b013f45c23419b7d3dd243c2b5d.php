<?php

/* item.html.twig */
class __TwigTemplate_8e7ed698a381e73bf70403b458cef4e5a2cf6fadec5e75cdffa613a6ebea616c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->loadTemplate("item.html.twig", "item.html.twig", 1, "1738369997")->display($context);
    }

    public function getTemplateName()
    {
        return "item.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% embed 'partials/base.html.twig' %}

\t{% block content %}
\t\t{% if config.plugins.breadcrumbs.enabled %}
\t\t\t{% include 'partials/breadcrumbs.html.twig' %}
\t\t{% endif %}
\t\t
\t\t<div class=\"blog-content-item grid pure-g-r\">
\t\t\t<div id=\"item\" class=\"block pure-u-2-3 h-entry\">
\t\t\t    {% include 'partials/blog_item.html.twig' with {'blog':page.parent, 'truncate':false} %}
\t\t\t</div>
\t\t\t<div id=\"sidebar\" class=\"block size-1-3 pure-u-1-3\">
\t\t\t\t{% include 'partials/sidebar.html.twig' with {'blog':page.parent}%}
\t\t\t</div>
\t\t</div>
\t{% endblock %}

{% endembed %}
", "item.html.twig", "/Users/twhitehead/Sites/grav-admin/user/themes/antimatter/templates/item.html.twig");
    }
}


/* item.html.twig */
class __TwigTemplate_8e7ed698a381e73bf70403b458cef4e5a2cf6fadec5e75cdffa613a6ebea616c_1738369997 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("partials/base.html.twig", "item.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "\t\t";
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "breadcrumbs", array()), "enabled", array())) {
            // line 5
            echo "\t\t\t";
            $this->loadTemplate("partials/breadcrumbs.html.twig", "item.html.twig", 5)->display($context);
            // line 6
            echo "\t\t";
        }
        // line 7
        echo "\t\t
\t\t<div class=\"blog-content-item grid pure-g-r\">
\t\t\t<div id=\"item\" class=\"block pure-u-2-3 h-entry\">
\t\t\t    ";
        // line 10
        $this->loadTemplate("partials/blog_item.html.twig", "item.html.twig", 10)->display(array_merge($context, array("blog" => $this->getAttribute(($context["page"] ?? null), "parent", array()), "truncate" => false)));
        // line 11
        echo "\t\t\t</div>
\t\t\t<div id=\"sidebar\" class=\"block size-1-3 pure-u-1-3\">
\t\t\t\t";
        // line 13
        $this->loadTemplate("partials/sidebar.html.twig", "item.html.twig", 13)->display(array_merge($context, array("blog" => $this->getAttribute(($context["page"] ?? null), "parent", array()))));
        // line 14
        echo "\t\t\t</div>
\t\t</div>
\t";
    }

    public function getTemplateName()
    {
        return "item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 14,  112 => 13,  108 => 11,  106 => 10,  101 => 7,  98 => 6,  95 => 5,  92 => 4,  89 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% embed 'partials/base.html.twig' %}

\t{% block content %}
\t\t{% if config.plugins.breadcrumbs.enabled %}
\t\t\t{% include 'partials/breadcrumbs.html.twig' %}
\t\t{% endif %}
\t\t
\t\t<div class=\"blog-content-item grid pure-g-r\">
\t\t\t<div id=\"item\" class=\"block pure-u-2-3 h-entry\">
\t\t\t    {% include 'partials/blog_item.html.twig' with {'blog':page.parent, 'truncate':false} %}
\t\t\t</div>
\t\t\t<div id=\"sidebar\" class=\"block size-1-3 pure-u-1-3\">
\t\t\t\t{% include 'partials/sidebar.html.twig' with {'blog':page.parent}%}
\t\t\t</div>
\t\t</div>
\t{% endblock %}

{% endembed %}
", "item.html.twig", "/Users/twhitehead/Sites/grav-admin/user/themes/antimatter/templates/item.html.twig");
    }
}
