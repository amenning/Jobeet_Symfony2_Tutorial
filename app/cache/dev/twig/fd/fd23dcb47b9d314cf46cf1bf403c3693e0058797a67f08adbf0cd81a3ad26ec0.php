<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_b8693eb806b3b66d5de21741ec3597634f91b97306671084859ad7e5d4751996 extends Twig_Template
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
        $__internal_bc747d5b77218c8b165ef1f87adc603a61191298f529baeab2d7bd2dd1d98e48 = $this->env->getExtension("native_profiler");
        $__internal_bc747d5b77218c8b165ef1f87adc603a61191298f529baeab2d7bd2dd1d98e48->enter($__internal_bc747d5b77218c8b165ef1f87adc603a61191298f529baeab2d7bd2dd1d98e48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bc747d5b77218c8b165ef1f87adc603a61191298f529baeab2d7bd2dd1d98e48->leave($__internal_bc747d5b77218c8b165ef1f87adc603a61191298f529baeab2d7bd2dd1d98e48_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_06382008ee934b45d0e79e159d018c22ebc2a176090e121e596b5b8fb89d906b = $this->env->getExtension("native_profiler");
        $__internal_06382008ee934b45d0e79e159d018c22ebc2a176090e121e596b5b8fb89d906b->enter($__internal_06382008ee934b45d0e79e159d018c22ebc2a176090e121e596b5b8fb89d906b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_06382008ee934b45d0e79e159d018c22ebc2a176090e121e596b5b8fb89d906b->leave($__internal_06382008ee934b45d0e79e159d018c22ebc2a176090e121e596b5b8fb89d906b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_429a9a7d89433b32504de2c48fd5f04233aa3f89044cbc986c99da0c390ecf66 = $this->env->getExtension("native_profiler");
        $__internal_429a9a7d89433b32504de2c48fd5f04233aa3f89044cbc986c99da0c390ecf66->enter($__internal_429a9a7d89433b32504de2c48fd5f04233aa3f89044cbc986c99da0c390ecf66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_429a9a7d89433b32504de2c48fd5f04233aa3f89044cbc986c99da0c390ecf66->leave($__internal_429a9a7d89433b32504de2c48fd5f04233aa3f89044cbc986c99da0c390ecf66_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b1cb3427b8ae75381569459e40e80bea140d8fb0a5e272c82e42235af335964b = $this->env->getExtension("native_profiler");
        $__internal_b1cb3427b8ae75381569459e40e80bea140d8fb0a5e272c82e42235af335964b->enter($__internal_b1cb3427b8ae75381569459e40e80bea140d8fb0a5e272c82e42235af335964b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_b1cb3427b8ae75381569459e40e80bea140d8fb0a5e272c82e42235af335964b->leave($__internal_b1cb3427b8ae75381569459e40e80bea140d8fb0a5e272c82e42235af335964b_prof);

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
