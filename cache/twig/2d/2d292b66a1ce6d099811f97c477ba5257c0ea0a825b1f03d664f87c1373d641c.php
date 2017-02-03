<?php

/* user.html.twig */
class __TwigTemplate_6077fd521088f60ee058527fa38471a2ac3100c05a80858d7276d92a645e7048 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "user.html.twig", 1);
        $this->blocks = array(
            'titlebar' => array($this, 'block_titlebar'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        if ($this->getAttribute(($context["admin"] ?? null), "route", array())) {
            // line 4
            $context["user"] = $this->getAttribute(($context["admin"] ?? null), "data", array(0 => ("users/" . $this->getAttribute(($context["admin"] ?? null), "route", array()))), "method");
            // line 5
            $context["title"] = (($this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.USER") . ": ") . twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? null), "route", array())));
        } else {
            // line 7
            $context["title"] = $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.USERS");
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 10
    public function block_titlebar($context, array $blocks = array())
    {
        // line 11
        echo "    ";
        if ( !$this->getAttribute(($context["admin"] ?? null), "route", array())) {
            // line 12
            echo "        <div class=\"button-bar\">
            <a class=\"button\" href=\"#modal\" data-remodal-target=\"modal\"><i class=\"fa fa-plus\"></i> ";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ADD_ACCOUNT"), "html", null, true);
            echo "</a>
        </div>
        <h1><i class=\"fa fa-fw fa-users\"></i> ";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.USERS"), "html", null, true);
            echo "</h1>
    ";
        } else {
            // line 17
            echo "        <div class=\"button-bar\">
            ";
            // line 18
            if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "admin-pro", array(), "array"), "enabled", array())) {
                // line 19
                echo "            <a class=\"button\" href=\"";
                echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
                echo "/users\"><i class=\"fa fa-reply\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.BACK"), "html", null, true);
                echo "</a>
            ";
            }
            // line 21
            echo "            <button class=\"button\" type=\"submit\" name=\"task\" value=\"save\" form=\"blueprints\"><i class=\"fa fa-check\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.SAVE"), "html", null, true);
            echo "</button>
        </div>
        <h1><i class=\"fa fa-fw fa-user\"></i> ";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.USER"), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "username", array()));
            echo "</h1>
    ";
        }
    }

    // line 27
    public function block_content($context, array $blocks = array())
    {
        // line 28
        echo "    <div>
        ";
        // line 29
        if ( !$this->getAttribute(($context["admin"] ?? null), "route", array())) {
            // line 30
            echo "            ";
            $this->loadTemplate("partials/users-list.html.twig", "user.html.twig", 30)->display($context);
            // line 31
            echo "
            <div class=\"remodal\" data-remodal-id=\"modal\" data-remodal-options=\"hashTracking: false\">
                ";
            // line 33
            $this->loadTemplate("partials/blueprints-new.html.twig", "user.html.twig", 33)->display(array_merge($context, array("blueprints" => $this->getAttribute(($context["admin"] ?? null), "blueprints", array(0 => "user/account_new"), "method"))));
            // line 34
            echo "            </div>
        ";
        } else {
            // line 36
            echo "            ";
            $this->loadTemplate("partials/blueprints.html.twig", "user.html.twig", 36)->display(array_merge($context, array("data" => ($context["user"] ?? null), "blueprints" => $this->getAttribute(($context["user"] ?? null), "blueprints", array()))));
            // line 37
            echo "        ";
        }
        // line 38
        echo "    </div>

    <div class=\"remodal\" data-remodal-id=\"changes\">
        <form>
            <h1>";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.MODAL_CHANGED_DETECTED_TITLE"), "html", null, true);
        echo "</h1>
            <p class=\"bigger\">
                ";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.MODAL_CHANGED_DETECTED_DESC"), "html", null, true);
        echo "
            </p>
            <br>
            <div class=\"button-bar\">
                <a class=\"button secondary\" data-leave-action=\"cancel\" href=\"#\"><i class=\"fa fa-fw fa-close\"></i> ";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CANCEL"), "html", null, true);
        echo "</a>
                <a class=\"button\" data-leave-action=\"continue\" href=\"#\"><i class=\"fa fa-fw fa-check\"></i> ";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CONTINUE"), "html", null, true);
        echo "</a>
            </div>
        </form>
    </div>
";
    }

    public function getTemplateName()
    {
        return "user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 49,  132 => 48,  125 => 44,  120 => 42,  114 => 38,  111 => 37,  108 => 36,  104 => 34,  102 => 33,  98 => 31,  95 => 30,  93 => 29,  90 => 28,  87 => 27,  78 => 23,  72 => 21,  64 => 19,  62 => 18,  59 => 17,  54 => 15,  49 => 13,  46 => 12,  43 => 11,  40 => 10,  36 => 1,  33 => 7,  30 => 5,  28 => 4,  26 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'partials/base.html.twig' %}

{% if admin.route %}
    {% set user = admin.data('users/' ~ admin.route) %}
    {% set title = \"PLUGIN_ADMIN.USER\"|tu ~ \": \" ~ admin.route|e %}
{% else %}
    {% set title = \"PLUGIN_ADMIN.USERS\"|tu %}
{% endif %}

{% block titlebar %}
    {% if not admin.route %}
        <div class=\"button-bar\">
            <a class=\"button\" href=\"#modal\" data-remodal-target=\"modal\"><i class=\"fa fa-plus\"></i> {{ \"PLUGIN_ADMIN.ADD_ACCOUNT\"|tu }}</a>
        </div>
        <h1><i class=\"fa fa-fw fa-users\"></i> {{ \"PLUGIN_ADMIN.USERS\"|tu }}</h1>
    {% else %}
        <div class=\"button-bar\">
            {% if config.plugins[\"admin-pro\"].enabled %}
            <a class=\"button\" href=\"{{ base_url }}/users\"><i class=\"fa fa-reply\"></i> {{ \"PLUGIN_ADMIN.BACK\"|tu }}</a>
            {% endif %}
            <button class=\"button\" type=\"submit\" name=\"task\" value=\"save\" form=\"blueprints\"><i class=\"fa fa-check\"></i> {{ \"PLUGIN_ADMIN.SAVE\"|tu }}</button>
        </div>
        <h1><i class=\"fa fa-fw fa-user\"></i> {{ \"PLUGIN_ADMIN.USER\"|tu }}: {{ user.username|e }}</h1>
    {% endif %}
{% endblock %}

{% block content %}
    <div>
        {% if not admin.route %}
            {% include 'partials/users-list.html.twig' %}

            <div class=\"remodal\" data-remodal-id=\"modal\" data-remodal-options=\"hashTracking: false\">
                {% include 'partials/blueprints-new.html.twig' with { blueprints: admin.blueprints('user/account_new') } %}
            </div>
        {% else %}
            {% include 'partials/blueprints.html.twig' with { data: user, blueprints: user.blueprints } %}
        {% endif %}
    </div>

    <div class=\"remodal\" data-remodal-id=\"changes\">
        <form>
            <h1>{{ \"PLUGIN_ADMIN.MODAL_CHANGED_DETECTED_TITLE\"|tu }}</h1>
            <p class=\"bigger\">
                {{ \"PLUGIN_ADMIN.MODAL_CHANGED_DETECTED_DESC\"|tu }}
            </p>
            <br>
            <div class=\"button-bar\">
                <a class=\"button secondary\" data-leave-action=\"cancel\" href=\"#\"><i class=\"fa fa-fw fa-close\"></i> {{ \"PLUGIN_ADMIN.CANCEL\"|tu }}</a>
                <a class=\"button\" data-leave-action=\"continue\" href=\"#\"><i class=\"fa fa-fw fa-check\"></i> {{ \"PLUGIN_ADMIN.CONTINUE\"|tu }}</a>
            </div>
        </form>
    </div>
{% endblock %}

", "user.html.twig", "/Users/twhitehead/Sites/grav-admin/user/plugins/admin/themes/grav/templates/user.html.twig");
    }
}
