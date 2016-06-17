<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_f732ade2649809760573f5532d49062052050ff62798e62cf83a8985a532e701 extends Twig_Template
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
        $__internal_72e51f073da09109cf8da2c4a5fd9dfd7948f95c9b6bfd38e4065e1046ae82b4 = $this->env->getExtension("native_profiler");
        $__internal_72e51f073da09109cf8da2c4a5fd9dfd7948f95c9b6bfd38e4065e1046ae82b4->enter($__internal_72e51f073da09109cf8da2c4a5fd9dfd7948f95c9b6bfd38e4065e1046ae82b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_72e51f073da09109cf8da2c4a5fd9dfd7948f95c9b6bfd38e4065e1046ae82b4->leave($__internal_72e51f073da09109cf8da2c4a5fd9dfd7948f95c9b6bfd38e4065e1046ae82b4_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b6fed9ba92fed52643c37b27710071a6e2f156270a79c68f6e89b8b01d8a487c = $this->env->getExtension("native_profiler");
        $__internal_b6fed9ba92fed52643c37b27710071a6e2f156270a79c68f6e89b8b01d8a487c->enter($__internal_b6fed9ba92fed52643c37b27710071a6e2f156270a79c68f6e89b8b01d8a487c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b6fed9ba92fed52643c37b27710071a6e2f156270a79c68f6e89b8b01d8a487c->leave($__internal_b6fed9ba92fed52643c37b27710071a6e2f156270a79c68f6e89b8b01d8a487c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_06e9ae2cacaf90091b202447aa10312e83fe642eaeb899627894f03a7f79947a = $this->env->getExtension("native_profiler");
        $__internal_06e9ae2cacaf90091b202447aa10312e83fe642eaeb899627894f03a7f79947a->enter($__internal_06e9ae2cacaf90091b202447aa10312e83fe642eaeb899627894f03a7f79947a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_06e9ae2cacaf90091b202447aa10312e83fe642eaeb899627894f03a7f79947a->leave($__internal_06e9ae2cacaf90091b202447aa10312e83fe642eaeb899627894f03a7f79947a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_711b6ee4c8a02d10cc375ebd36c30202dd8cf55da991c4b9bf4137bc1825b718 = $this->env->getExtension("native_profiler");
        $__internal_711b6ee4c8a02d10cc375ebd36c30202dd8cf55da991c4b9bf4137bc1825b718->enter($__internal_711b6ee4c8a02d10cc375ebd36c30202dd8cf55da991c4b9bf4137bc1825b718_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_711b6ee4c8a02d10cc375ebd36c30202dd8cf55da991c4b9bf4137bc1825b718->leave($__internal_711b6ee4c8a02d10cc375ebd36c30202dd8cf55da991c4b9bf4137bc1825b718_prof);

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
