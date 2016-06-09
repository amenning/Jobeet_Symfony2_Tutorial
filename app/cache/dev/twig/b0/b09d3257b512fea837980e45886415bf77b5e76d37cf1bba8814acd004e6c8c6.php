<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_a53df92fd82faf3246feded0683c9fdcf3090a8ccf4caea1122ea06d2f1bf4cc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_65544ca2c54da3e8f2994cd746ea9d1a9be53a44d5e9185e439d3be5eee8f794 = $this->env->getExtension("native_profiler");
        $__internal_65544ca2c54da3e8f2994cd746ea9d1a9be53a44d5e9185e439d3be5eee8f794->enter($__internal_65544ca2c54da3e8f2994cd746ea9d1a9be53a44d5e9185e439d3be5eee8f794_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_65544ca2c54da3e8f2994cd746ea9d1a9be53a44d5e9185e439d3be5eee8f794->leave($__internal_65544ca2c54da3e8f2994cd746ea9d1a9be53a44d5e9185e439d3be5eee8f794_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_727a926b4a50eb66bedd33ed30687dc8434da9ea562f13f6ba154dc4cc6b09b9 = $this->env->getExtension("native_profiler");
        $__internal_727a926b4a50eb66bedd33ed30687dc8434da9ea562f13f6ba154dc4cc6b09b9->enter($__internal_727a926b4a50eb66bedd33ed30687dc8434da9ea562f13f6ba154dc4cc6b09b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_727a926b4a50eb66bedd33ed30687dc8434da9ea562f13f6ba154dc4cc6b09b9->leave($__internal_727a926b4a50eb66bedd33ed30687dc8434da9ea562f13f6ba154dc4cc6b09b9_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a28c79a26d0a4750ff01ea499c035a0af349bf04e7c6a935da1e478d586a478e = $this->env->getExtension("native_profiler");
        $__internal_a28c79a26d0a4750ff01ea499c035a0af349bf04e7c6a935da1e478d586a478e->enter($__internal_a28c79a26d0a4750ff01ea499c035a0af349bf04e7c6a935da1e478d586a478e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a28c79a26d0a4750ff01ea499c035a0af349bf04e7c6a935da1e478d586a478e->leave($__internal_a28c79a26d0a4750ff01ea499c035a0af349bf04e7c6a935da1e478d586a478e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_184f68206ec5614001110b33e7a2f487142a02d8b6ea7980a598a0b276e25be8 = $this->env->getExtension("native_profiler");
        $__internal_184f68206ec5614001110b33e7a2f487142a02d8b6ea7980a598a0b276e25be8->enter($__internal_184f68206ec5614001110b33e7a2f487142a02d8b6ea7980a598a0b276e25be8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_184f68206ec5614001110b33e7a2f487142a02d8b6ea7980a598a0b276e25be8->leave($__internal_184f68206ec5614001110b33e7a2f487142a02d8b6ea7980a598a0b276e25be8_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
