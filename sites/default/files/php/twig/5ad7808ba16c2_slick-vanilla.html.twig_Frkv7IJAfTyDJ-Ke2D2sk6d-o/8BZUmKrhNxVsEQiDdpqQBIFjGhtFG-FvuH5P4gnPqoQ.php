<?php

/* profiles/brainstorm_profile/modules/slick/templates/slick-vanilla.html.twig */
class __TwigTemplate_9a833248afc163d2bccba524dcf28cbe458904c83db6b5de446120e68356bbb1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'slick_vanilla' => array($this, 'block_slick_vanilla'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("set" => 19, "block" => 25);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'block'),
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

        // line 19
        $context["classes"] = array(0 => "slick__slide", 1 => "slide", 2 => ("slide--" .         // line 22
(isset($context["delta"]) ? $context["delta"] : null)));
        // line 25
        $this->displayBlock('slick_vanilla', $context, $blocks);
    }

    public function block_slick_vanilla($context, array $blocks = array())
    {
        // line 26
        echo "  <div";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
        echo ">
    ";
        // line 27
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["item"]) ? $context["item"] : null), "html", null, true));
        echo "
  </div>
";
    }

    public function getTemplateName()
    {
        return "profiles/brainstorm_profile/modules/slick/templates/slick-vanilla.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 27,  53 => 26,  47 => 25,  45 => 22,  44 => 19,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "profiles/brainstorm_profile/modules/slick/templates/slick-vanilla.html.twig", "C:\\wamp\\www\\brainstorm_profile-8\\profiles\\brainstorm_profile\\modules\\slick\\templates\\slick-vanilla.html.twig");
    }
}
