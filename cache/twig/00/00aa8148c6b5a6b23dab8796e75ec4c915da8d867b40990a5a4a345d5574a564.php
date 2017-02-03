<?php

/* forms/fields/userinfo/userinfo.html.twig */
class __TwigTemplate_4f8366a82435ff9c95c4a299e93310e12172e5244041d0314cc1e2924fc46c8f extends Twig_Template
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
        echo "<div class=\"form-field grid user-details\">
    <div class=\"form-label block size-1-3\">
        <label><img src=\"https://www.gravatar.com/avatar/";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->md5Filter($this->getAttribute(($context["data"] ?? null), "email", array())), "html", null, true);
        echo "?s=128\" /></label>
    </div>
    <div class=\"form-data block size-2-3\">
        <h2>";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "fullname", array()), "html", null, true);
        echo "</h2>
        <h5>
        <a href=\"mailto:";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "email", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "email", array()), "html", null, true);
        echo "</a>
        ";
        // line 9
        if ($this->getAttribute(($context["data"] ?? null), "title", array())) {
            // line 10
            echo "        - ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "title", array()), "html", null, true);
            echo "
        ";
        }
        // line 12
        echo "        </h5>
        <p class=\"gravatar\">";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.AVATAR_BY"), "html", null, true);
        echo " <a href=\"https://gravatar.com\" target=\"_blank\">gravatar.com</a></p>
    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "forms/fields/userinfo/userinfo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 13,  48 => 12,  42 => 10,  40 => 9,  34 => 8,  29 => 6,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"form-field grid user-details\">
    <div class=\"form-label block size-1-3\">
        <label><img src=\"https://www.gravatar.com/avatar/{{ data.email|md5 }}?s=128\" /></label>
    </div>
    <div class=\"form-data block size-2-3\">
        <h2>{{ data.fullname }}</h2>
        <h5>
        <a href=\"mailto:{{ data.email }}\">{{ data.email }}</a>
        {% if data.title %}
        - {{ data.title }}
        {% endif %}
        </h5>
        <p class=\"gravatar\">{{ \"PLUGIN_ADMIN.AVATAR_BY\"|tu }} <a href=\"https://gravatar.com\" target=\"_blank\">gravatar.com</a></p>
    </div>
</div>

", "forms/fields/userinfo/userinfo.html.twig", "/Users/twhitehead/Sites/grav-admin/user/plugins/admin/themes/grav/templates/forms/fields/userinfo/userinfo.html.twig");
    }
}
