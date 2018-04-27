<?php

/* profiles/brainstorm_profile/modules/slick/templates/slick-thumbnail.html.twig */
class __TwigTemplate_b317f27adb9343b4def5f23d85b51b9431df1308047a1cacec864ac190585c89 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'slick_thumbnail' => array($this, 'block_slick_thumbnail'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("set" => 16, "block" => 22, "if" => 25);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'block', 'if'),
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

        // line 16
        $context["classes"] = array(0 => "slick__slide", 1 => "slide", 2 => ("slide--" .         // line 19
(isset($context["delta"]) ? $context["delta"] : null)));
        // line 22
        $this->displayBlock('slick_thumbnail', $context, $blocks);
    }

    public function block_slick_thumbnail($context, array $blocks = array())
    {
        // line 23
        echo "  <div";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
        echo ">
    ";
        // line 24
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "slide", array()), "html", null, true));
        echo "
    ";
        // line 25
        if ( !twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "caption", array()))) {
            // line 26
            echo "      <div class=\"slide__caption\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "caption", array()), "html", null, true));
            echo "</div>
    ";
        }
        // line 28
        echo "  </div>
";
    }

    public function getTemplateName()
    {
        return "profiles/brainstorm_profile/modules/slick/templates/slick-thumbnail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 28,  64 => 26,  62 => 25,  58 => 24,  53 => 23,  47 => 22,  45 => 19,  44 => 16,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "profiles/brainstorm_profile/modules/slick/templates/slick-thumbnail.html.twig", "C:\\wamp\\www\\brainstorm_profile-8\\profiles\\brainstorm_profile\\modules\\slick\\templates\\slick-thumbnail.html.twig");
    }
}
