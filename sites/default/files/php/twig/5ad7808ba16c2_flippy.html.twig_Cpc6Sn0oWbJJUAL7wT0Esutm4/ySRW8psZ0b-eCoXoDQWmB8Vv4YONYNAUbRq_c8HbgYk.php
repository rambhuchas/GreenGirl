<?php

/* profiles/brainstorm_profile/modules/flippy/templates/flippy.html.twig */
class __TwigTemplate_ab76fd5df7d9ef9bad69a2cf3206e4a6f17e1499e05a7af289f0d8b5bcc1a7f0 extends Twig_Template
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
        $tags = array("if" => 2);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 1
        echo "<ul class=\"flippy\">
    ";
        // line 2
        if ((isset($context["first"]) ? $context["first"] : null)) {
            // line 3
            echo "    <li class=\"flippy-first\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["first"]) ? $context["first"] : null), "html", null, true));
            echo "</li>
    ";
        }
        // line 5
        echo "    ";
        if ((isset($context["prev"]) ? $context["prev"] : null)) {
            // line 6
            echo "    <li class=\"flippy-previous\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["prev"]) ? $context["prev"] : null), "html", null, true));
            echo "</li>
    ";
        }
        // line 8
        echo "    ";
        if ((isset($context["random"]) ? $context["random"] : null)) {
            // line 9
            echo "    <li class=\"flippy-random\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["random"]) ? $context["random"] : null), "html", null, true));
            echo "</li>
    ";
        }
        // line 11
        echo "    ";
        if ((isset($context["next"]) ? $context["next"] : null)) {
            // line 12
            echo "    <li class=\"flippy-next\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["next"]) ? $context["next"] : null), "html", null, true));
            echo "</li>
    ";
        }
        // line 14
        echo "    ";
        if ((isset($context["last"]) ? $context["last"] : null)) {
            // line 15
            echo "    <li class=\"flippy-last\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["last"]) ? $context["last"] : null), "html", null, true));
            echo "</li>
    ";
        }
        // line 17
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "profiles/brainstorm_profile/modules/flippy/templates/flippy.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 17,  84 => 15,  81 => 14,  75 => 12,  72 => 11,  66 => 9,  63 => 8,  57 => 6,  54 => 5,  48 => 3,  46 => 2,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "profiles/brainstorm_profile/modules/flippy/templates/flippy.html.twig", "C:\\wamp\\www\\brainstorm_profile-8\\profiles\\brainstorm_profile\\modules\\flippy\\templates\\flippy.html.twig");
    }
}
