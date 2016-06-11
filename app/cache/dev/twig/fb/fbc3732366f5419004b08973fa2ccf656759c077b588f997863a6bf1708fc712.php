<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_dc23f18f32465427fb0e1136e0172e5d7a95bb25e2967c7847d38f9dab0dc028 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1da7ed183107528c4e639079cde7210d6d9f1e5b1faa51f667e9565e82a7e353 = $this->env->getExtension("native_profiler");
        $__internal_1da7ed183107528c4e639079cde7210d6d9f1e5b1faa51f667e9565e82a7e353->enter($__internal_1da7ed183107528c4e639079cde7210d6d9f1e5b1faa51f667e9565e82a7e353_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1da7ed183107528c4e639079cde7210d6d9f1e5b1faa51f667e9565e82a7e353->leave($__internal_1da7ed183107528c4e639079cde7210d6d9f1e5b1faa51f667e9565e82a7e353_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0ae402f16c5a7c3238851a4fbf8da3fa90495a79722d942dbc8a783dbc4a5109 = $this->env->getExtension("native_profiler");
        $__internal_0ae402f16c5a7c3238851a4fbf8da3fa90495a79722d942dbc8a783dbc4a5109->enter($__internal_0ae402f16c5a7c3238851a4fbf8da3fa90495a79722d942dbc8a783dbc4a5109_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_0ae402f16c5a7c3238851a4fbf8da3fa90495a79722d942dbc8a783dbc4a5109->leave($__internal_0ae402f16c5a7c3238851a4fbf8da3fa90495a79722d942dbc8a783dbc4a5109_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a251382381cdce2861f36c74c9fce28571a56edcf824fd0f77a69474c6ca7838 = $this->env->getExtension("native_profiler");
        $__internal_a251382381cdce2861f36c74c9fce28571a56edcf824fd0f77a69474c6ca7838->enter($__internal_a251382381cdce2861f36c74c9fce28571a56edcf824fd0f77a69474c6ca7838_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a251382381cdce2861f36c74c9fce28571a56edcf824fd0f77a69474c6ca7838->leave($__internal_a251382381cdce2861f36c74c9fce28571a56edcf824fd0f77a69474c6ca7838_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a2faad398481974bf5ff0214dfdf589f5ecb01aadf30e4080ca64343830e66ee = $this->env->getExtension("native_profiler");
        $__internal_a2faad398481974bf5ff0214dfdf589f5ecb01aadf30e4080ca64343830e66ee->enter($__internal_a2faad398481974bf5ff0214dfdf589f5ecb01aadf30e4080ca64343830e66ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a2faad398481974bf5ff0214dfdf589f5ecb01aadf30e4080ca64343830e66ee->leave($__internal_a2faad398481974bf5ff0214dfdf589f5ecb01aadf30e4080ca64343830e66ee_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
