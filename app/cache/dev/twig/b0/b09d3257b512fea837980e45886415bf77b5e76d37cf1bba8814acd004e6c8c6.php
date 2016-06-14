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
        $__internal_7d093acfb1ce512f198e7d22bc203e07e89afcf361e242f4a8f3123ac0534249 = $this->env->getExtension("native_profiler");
        $__internal_7d093acfb1ce512f198e7d22bc203e07e89afcf361e242f4a8f3123ac0534249->enter($__internal_7d093acfb1ce512f198e7d22bc203e07e89afcf361e242f4a8f3123ac0534249_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7d093acfb1ce512f198e7d22bc203e07e89afcf361e242f4a8f3123ac0534249->leave($__internal_7d093acfb1ce512f198e7d22bc203e07e89afcf361e242f4a8f3123ac0534249_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_faa85066e8885e4336592ec9a6f352337205044776f4e247d08de940584136bb = $this->env->getExtension("native_profiler");
        $__internal_faa85066e8885e4336592ec9a6f352337205044776f4e247d08de940584136bb->enter($__internal_faa85066e8885e4336592ec9a6f352337205044776f4e247d08de940584136bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_faa85066e8885e4336592ec9a6f352337205044776f4e247d08de940584136bb->leave($__internal_faa85066e8885e4336592ec9a6f352337205044776f4e247d08de940584136bb_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f21abf35c9754df7f8499f4df29ca205c4f51d76a182ca2d35e20c766d465cb1 = $this->env->getExtension("native_profiler");
        $__internal_f21abf35c9754df7f8499f4df29ca205c4f51d76a182ca2d35e20c766d465cb1->enter($__internal_f21abf35c9754df7f8499f4df29ca205c4f51d76a182ca2d35e20c766d465cb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f21abf35c9754df7f8499f4df29ca205c4f51d76a182ca2d35e20c766d465cb1->leave($__internal_f21abf35c9754df7f8499f4df29ca205c4f51d76a182ca2d35e20c766d465cb1_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3b0665371af36f88daa551211ab963bb9035528e7ae2949508c826fc6f2d400e = $this->env->getExtension("native_profiler");
        $__internal_3b0665371af36f88daa551211ab963bb9035528e7ae2949508c826fc6f2d400e->enter($__internal_3b0665371af36f88daa551211ab963bb9035528e7ae2949508c826fc6f2d400e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3b0665371af36f88daa551211ab963bb9035528e7ae2949508c826fc6f2d400e->leave($__internal_3b0665371af36f88daa551211ab963bb9035528e7ae2949508c826fc6f2d400e_prof);

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
