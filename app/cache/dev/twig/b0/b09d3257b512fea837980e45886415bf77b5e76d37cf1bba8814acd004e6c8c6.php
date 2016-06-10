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
        $__internal_845524153569fa75814adcbbde7f3949bfc97d9184e43f32ad43a48035c0a718 = $this->env->getExtension("native_profiler");
        $__internal_845524153569fa75814adcbbde7f3949bfc97d9184e43f32ad43a48035c0a718->enter($__internal_845524153569fa75814adcbbde7f3949bfc97d9184e43f32ad43a48035c0a718_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_845524153569fa75814adcbbde7f3949bfc97d9184e43f32ad43a48035c0a718->leave($__internal_845524153569fa75814adcbbde7f3949bfc97d9184e43f32ad43a48035c0a718_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_49a84513c39f88f3530988256f306ddd1f7a00e26489a424a785600a53131c53 = $this->env->getExtension("native_profiler");
        $__internal_49a84513c39f88f3530988256f306ddd1f7a00e26489a424a785600a53131c53->enter($__internal_49a84513c39f88f3530988256f306ddd1f7a00e26489a424a785600a53131c53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_49a84513c39f88f3530988256f306ddd1f7a00e26489a424a785600a53131c53->leave($__internal_49a84513c39f88f3530988256f306ddd1f7a00e26489a424a785600a53131c53_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_10ba744b8c967957653340439cf206a2d80163809758ac760c04e39f26adc97f = $this->env->getExtension("native_profiler");
        $__internal_10ba744b8c967957653340439cf206a2d80163809758ac760c04e39f26adc97f->enter($__internal_10ba744b8c967957653340439cf206a2d80163809758ac760c04e39f26adc97f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_10ba744b8c967957653340439cf206a2d80163809758ac760c04e39f26adc97f->leave($__internal_10ba744b8c967957653340439cf206a2d80163809758ac760c04e39f26adc97f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b63a0d635af7b62fd9ca731fdceaa9303331b408d7ff1a61894c176aa7c88b75 = $this->env->getExtension("native_profiler");
        $__internal_b63a0d635af7b62fd9ca731fdceaa9303331b408d7ff1a61894c176aa7c88b75->enter($__internal_b63a0d635af7b62fd9ca731fdceaa9303331b408d7ff1a61894c176aa7c88b75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_b63a0d635af7b62fd9ca731fdceaa9303331b408d7ff1a61894c176aa7c88b75->leave($__internal_b63a0d635af7b62fd9ca731fdceaa9303331b408d7ff1a61894c176aa7c88b75_prof);

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
