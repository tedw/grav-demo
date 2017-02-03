<?php

/* config.html.twig */
class __TwigTemplate_82e9a02ec2ad5f7d6af7a7db52540d1300f540537771bd36ff74d6dae2c73b0a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "config.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'titlebar' => array($this, 'block_titlebar'),
            'content_top' => array($this, 'block_content_top'),
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
        $context["config_slug"] = $this->getAttribute(($context["uri"] ?? null), "basename", array());
        // line 4
        $context["isInfo"] = (($context["config_slug"] ?? null) == "info");
        // line 6
        $context["title"] = (($this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CONFIGURATION") . ": ") . $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter(("PLUGIN_ADMIN." . twig_upper_filter($this->env, ($context["config_slug"] ?? null)))));
        // line 8
        if ( !($context["isInfo"] ?? null)) {
            // line 9
            $context["data"] = $this->getAttribute(($context["admin"] ?? null), "data", array(0 => ("config/" . ($context["config_slug"] ?? null))), "method");
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 13
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => (($context["theme_url"] ?? null) . "/css/codemirror/codemirror.css")), "method");
        // line 14
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
    }

    // line 17
    public function block_javascripts($context, array $blocks = array())
    {
        // line 18
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
    }

    // line 21
    public function block_titlebar($context, array $blocks = array())
    {
        // line 22
        echo "    <div class=\"button-bar\">
        <a class=\"button\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "\"><i class=\"fa fa-reply\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.BACK"), "html", null, true);
        echo "</a>
        <button class=\"button\" type=\"submit\" name=\"task\" value=\"save\" form=\"blueprints\"><i class=\"fa fa-check\"></i> ";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.SAVE"), "html", null, true);
        echo "</button>
    </div>
    <h1><i class=\"fa fa-fw fa-wrench\"></i> ";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CONFIGURATION"), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter(("PLUGIN_ADMIN." . twig_upper_filter($this->env, ($context["config_slug"] ?? null)))), "html", null, true);
        echo "</h1>
";
    }

    // line 29
    public function block_content_top($context, array $blocks = array())
    {
        // line 30
        echo "
    <div class=\"alert notice\">";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.SAVE_LOCATION"), "html", null, true);
        echo ": <b>";
        echo twig_escape_filter($this->env, twig_replace_filter($this->getAttribute($this->getAttribute(($context["data"] ?? null), "file", array()), "filename", array()), array(($context["base_path"] ?? null) => "")), "html", null, true);
        echo "</b></div>
    <ul class=\"tab-bar\">

        ";
        // line 34
        if ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->authorize(array(0 => "admin.configuration_system", 1 => "admin.super"))) {
            // line 35
            echo "        <li ";
            if ((($context["config_slug"] ?? null) == "system")) {
                echo "class=\"active\"";
            }
            echo ">
            ";
            // line 36
            if ((($context["config_slug"] ?? null) == "system")) {
                echo "<span>";
            } else {
                echo "<a href=\"";
                echo twig_escape_filter($this->env, ($context["base_url_relative"] ?? null), "html", null, true);
                echo "/config/system\">";
            }
            // line 37
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.SYSTEM"), "html", null, true);
            echo "
            ";
            // line 38
            if ((($context["config_slug"] ?? null) == "system")) {
                echo "</span>";
            } else {
                echo "</a>";
            }
            // line 39
            echo "        </li>
        ";
        }
        // line 41
        echo "
        ";
        // line 42
        if ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->authorize(array(0 => "admin.configuration_site", 1 => "admin.super"))) {
            // line 43
            echo "        <li ";
            if ((($context["config_slug"] ?? null) == "site")) {
                echo "class=\"active\"";
            }
            echo ">
            ";
            // line 44
            if ((($context["config_slug"] ?? null) == "site")) {
                echo "<span>";
            } else {
                echo "<a href=\"";
                echo twig_escape_filter($this->env, ($context["base_url_relative"] ?? null), "html", null, true);
                echo "/config/site\">";
            }
            // line 45
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.SITE"), "html", null, true);
            echo "
            ";
            // line 46
            if ((($context["config_slug"] ?? null) == "site")) {
                echo "</span>";
            } else {
                echo "</a>";
            }
            // line 47
            echo "        </li>
        ";
        }
        // line 49
        echo "
        ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["admin"] ?? null), "configurations", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["configuration"]) {
            // line 51
            echo "            ";
            if ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->authorize(array(0 => ("admin.configuration_" . $context["configuration"]), 1 => "admin.super"))) {
                // line 52
                echo "                ";
                $context["current_blueprints"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["admin"] ?? null), "data", array(0 => ("config/" . $context["configuration"])), "method"), "blueprints", array()), "toArray", array(), "method");
                // line 53
                echo "                ";
                if ((((($context["configuration"] != "system") && ($context["configuration"] != "site")) &&  !$this->getAttribute($this->getAttribute(($context["current_blueprints"] ?? null), "form", array()), "hidden", array())) &&  !twig_test_empty($this->getAttribute($this->getAttribute(($context["current_blueprints"] ?? null), "form", array()), "fields", array())))) {
                    // line 54
                    echo "                    <li ";
                    if ((($context["config_slug"] ?? null) == $context["configuration"])) {
                        echo "class=\"active\"";
                    }
                    echo ">
                        ";
                    // line 55
                    if ((($context["config_slug"] ?? null) == $context["configuration"])) {
                        echo "<span>";
                    } else {
                        echo "<a href=\"";
                        echo twig_escape_filter($this->env, ($context["base_url_relative"] ?? null), "html", null, true);
                        echo "/config/";
                        echo twig_escape_filter($this->env, $context["configuration"], "html", null, true);
                        echo "\">";
                    }
                    // line 56
                    echo "                        ";
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter($context["configuration"])), "html", null, true);
                    echo "
                        ";
                    // line 57
                    if ((($context["config_slug"] ?? null) == $context["configuration"])) {
                        echo "</span>";
                    } else {
                        echo "</a>";
                    }
                    // line 58
                    echo "                    </li>
                ";
                }
                // line 60
                echo "            ";
            }
            // line 61
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['configuration'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "
        ";
        // line 63
        if ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->authorize(array(0 => "admin.configuration_info", 1 => "admin.super"))) {
            // line 64
            echo "        <li ";
            if ((($context["config_slug"] ?? null) == "info")) {
                echo "class=\"active\"";
            }
            echo ">
            ";
            // line 65
            if ((($context["config_slug"] ?? null) == "info")) {
                echo "<span>";
            } else {
                echo "<a href=\"";
                echo twig_escape_filter($this->env, ($context["base_url_relative"] ?? null), "html", null, true);
                echo "/config/info\">";
            }
            // line 66
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.INFO"), "html", null, true);
            echo "
            ";
            // line 67
            if ((($context["config_slug"] ?? null) == "info")) {
                echo "</span>";
            } else {
                echo "</a>";
            }
            // line 68
            echo "        </li>
        ";
        }
        // line 70
        echo "
    </ul>
";
    }

    // line 74
    public function block_content($context, array $blocks = array())
    {
        // line 75
        echo "    ";
        if ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->authorize(array(0 => ("admin.configuration_" . ($context["config_slug"] ?? null)), 1 => "admin.super"))) {
            // line 76
            echo "        ";
            if (($context["isInfo"] ?? null)) {
                // line 77
                echo "            <div id=\"phpinfo\">
                ";
                // line 78
                echo $this->getAttribute(($context["admin"] ?? null), "phpinfo", array());
                echo "
            </div>
        ";
            } else {
                // line 81
                echo "            ";
                $this->loadTemplate("partials/blueprints.html.twig", "config.html.twig", 81)->display(array_merge($context, array("blueprints" => $this->getAttribute(($context["data"] ?? null), "blueprints", array()), "data" => ($context["data"] ?? null))));
                // line 82
                echo "        ";
            }
            // line 83
            echo "    ";
        }
        // line 84
        echo "    ";
        $this->loadTemplate("partials/modal-changes-detected.html.twig", "config.html.twig", 84)->display($context);
    }

    public function getTemplateName()
    {
        return "config.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  298 => 84,  295 => 83,  292 => 82,  289 => 81,  283 => 78,  280 => 77,  277 => 76,  274 => 75,  271 => 74,  265 => 70,  261 => 68,  255 => 67,  250 => 66,  242 => 65,  235 => 64,  233 => 63,  230 => 62,  224 => 61,  221 => 60,  217 => 58,  211 => 57,  206 => 56,  196 => 55,  189 => 54,  186 => 53,  183 => 52,  180 => 51,  176 => 50,  173 => 49,  169 => 47,  163 => 46,  158 => 45,  150 => 44,  143 => 43,  141 => 42,  138 => 41,  134 => 39,  128 => 38,  123 => 37,  115 => 36,  108 => 35,  106 => 34,  98 => 31,  95 => 30,  92 => 29,  84 => 26,  79 => 24,  73 => 23,  70 => 22,  67 => 21,  60 => 18,  57 => 17,  50 => 14,  47 => 13,  44 => 12,  40 => 1,  37 => 9,  35 => 8,  33 => 6,  31 => 4,  29 => 3,  11 => 1,);
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

{% set config_slug = uri.basename %}
{% set isInfo = (config_slug == 'info') %}

{% set title = \"PLUGIN_ADMIN.CONFIGURATION\"|tu ~ \": \" ~ (\"PLUGIN_ADMIN.\" ~ config_slug|upper)|tu %}

{% if not isInfo %}
    {% set data = admin.data('config/' ~ config_slug) %}
{% endif %}

{% block stylesheets %}
    {% do assets.addCss(theme_url ~ '/css/codemirror/codemirror.css') %}
    {{ parent() }}
{% endblock %}

{% block javascripts %}
    {{ parent() }}
{% endblock %}

{% block titlebar %}
    <div class=\"button-bar\">
        <a class=\"button\" href=\"{{ base_url }}\"><i class=\"fa fa-reply\"></i> {{ \"PLUGIN_ADMIN.BACK\"|tu }}</a>
        <button class=\"button\" type=\"submit\" name=\"task\" value=\"save\" form=\"blueprints\"><i class=\"fa fa-check\"></i> {{ \"PLUGIN_ADMIN.SAVE\"|tu }}</button>
    </div>
    <h1><i class=\"fa fa-fw fa-wrench\"></i> {{ \"PLUGIN_ADMIN.CONFIGURATION\"|tu }} - {{ (\"PLUGIN_ADMIN.\" ~ config_slug|upper)|tu }}</h1>
{% endblock %}

{% block content_top %}

    <div class=\"alert notice\">{{ \"PLUGIN_ADMIN.SAVE_LOCATION\"|tu }}: <b>{{ data.file.filename|replace({(base_path):''}) }}</b></div>
    <ul class=\"tab-bar\">

        {% if authorize(['admin.configuration_system', 'admin.super']) %}
        <li {% if config_slug == 'system' %}class=\"active\"{% endif %}>
            {% if config_slug == 'system' %}<span>{% else %}<a href=\"{{ base_url_relative }}/config/system\">{% endif %}
            {{ \"PLUGIN_ADMIN.SYSTEM\"|tu }}
            {% if config_slug == 'system' %}</span>{% else %}</a>{% endif %}
        </li>
        {% endif %}

        {% if authorize(['admin.configuration_site', 'admin.super']) %}
        <li {% if config_slug == 'site' %}class=\"active\"{% endif %}>
            {% if config_slug == 'site' %}<span>{% else %}<a href=\"{{ base_url_relative }}/config/site\">{% endif %}
            {{ \"PLUGIN_ADMIN.SITE\"|tu }}
            {% if config_slug == 'site' %}</span>{% else %}</a>{% endif %}
        </li>
        {% endif %}

        {% for configuration in admin.configurations %}
            {% if authorize(['admin.configuration_' ~ configuration, 'admin.super']) %}
                {% set current_blueprints = admin.data('config/' ~ configuration).blueprints.toArray() %}
                {% if configuration != 'system' and configuration != 'site' and not current_blueprints.form.hidden and current_blueprints.form.fields is not empty %}
                    <li {% if config_slug == configuration %}class=\"active\"{% endif %}>
                        {% if config_slug == configuration %}<span>{% else %}<a href=\"{{ base_url_relative }}/config/{{configuration}}\">{% endif %}
                        {{ configuration|tu|capitalize }}
                        {% if config_slug == configuration %}</span>{% else %}</a>{% endif %}
                    </li>
                {% endif %}
            {% endif %}
        {% endfor %}

        {% if authorize(['admin.configuration_info', 'admin.super']) %}
        <li {% if config_slug == 'info' %}class=\"active\"{% endif %}>
            {% if config_slug == 'info' %}<span>{% else %}<a href=\"{{ base_url_relative }}/config/info\">{% endif %}
            {{ \"PLUGIN_ADMIN.INFO\"|tu }}
            {% if config_slug == 'info' %}</span>{% else %}</a>{% endif %}
        </li>
        {% endif %}

    </ul>
{% endblock %}

{% block content %}
    {% if authorize(['admin.configuration_' ~ config_slug, 'admin.super']) %}
        {% if isInfo %}
            <div id=\"phpinfo\">
                {{ admin.phpinfo|raw }}
            </div>
        {% else %}
            {% include 'partials/blueprints.html.twig' with { blueprints: data.blueprints, data: data } %}
        {% endif %}
    {% endif %}
    {% include 'partials/modal-changes-detected.html.twig' %}
{% endblock %}

", "config.html.twig", "/Users/twhitehead/Sites/grav-admin/user/plugins/admin/themes/grav/templates/config.html.twig");
    }
}
