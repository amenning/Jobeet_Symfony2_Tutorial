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
        $__internal_b5efa86fbe8dc41e494ba045d41935bf084fbe0842c52b466b07048bbb421696 = $this->env->getExtension("native_profiler");
        $__internal_b5efa86fbe8dc41e494ba045d41935bf084fbe0842c52b466b07048bbb421696->enter($__internal_b5efa86fbe8dc41e494ba045d41935bf084fbe0842c52b466b07048bbb421696_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b5efa86fbe8dc41e494ba045d41935bf084fbe0842c52b466b07048bbb421696->leave($__internal_b5efa86fbe8dc41e494ba045d41935bf084fbe0842c52b466b07048bbb421696_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f63280d834a051ea2a56715496991bd120dcfa38116a2d1c8ab4ea45342eeee5 = $this->env->getExtension("native_profiler");
        $__internal_f63280d834a051ea2a56715496991bd120dcfa38116a2d1c8ab4ea45342eeee5->enter($__internal_f63280d834a051ea2a56715496991bd120dcfa38116a2d1c8ab4ea45342eeee5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f63280d834a051ea2a56715496991bd120dcfa38116a2d1c8ab4ea45342eeee5->leave($__internal_f63280d834a051ea2a56715496991bd120dcfa38116a2d1c8ab4ea45342eeee5_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_69b64b5a05e529f3c50e9f68074b071778280eb0968e05d4e1cf1d82da1d739d = $this->env->getExtension("native_profiler");
        $__internal_69b64b5a05e529f3c50e9f68074b071778280eb0968e05d4e1cf1d82da1d739d->enter($__internal_69b64b5a05e529f3c50e9f68074b071778280eb0968e05d4e1cf1d82da1d739d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_69b64b5a05e529f3c50e9f68074b071778280eb0968e05d4e1cf1d82da1d739d->leave($__internal_69b64b5a05e529f3c50e9f68074b071778280eb0968e05d4e1cf1d82da1d739d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0f179d12031c9d0fac27c5e1a538d7065ed0bb4060faa11c3542f90e9f1081a8 = $this->env->getExtension("native_profiler");
        $__internal_0f179d12031c9d0fac27c5e1a538d7065ed0bb4060faa11c3542f90e9f1081a8->enter($__internal_0f179d12031c9d0fac27c5e1a538d7065ed0bb4060faa11c3542f90e9f1081a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_0f179d12031c9d0fac27c5e1a538d7065ed0bb4060faa11c3542f90e9f1081a8->leave($__internal_0f179d12031c9d0fac27c5e1a538d7065ed0bb4060faa11c3542f90e9f1081a8_prof);

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
