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
        $__internal_abda700a864e57d5ad42778bc0ebdb1d2a1ec9afb215bf5df8c97d904d16e752 = $this->env->getExtension("native_profiler");
        $__internal_abda700a864e57d5ad42778bc0ebdb1d2a1ec9afb215bf5df8c97d904d16e752->enter($__internal_abda700a864e57d5ad42778bc0ebdb1d2a1ec9afb215bf5df8c97d904d16e752_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_abda700a864e57d5ad42778bc0ebdb1d2a1ec9afb215bf5df8c97d904d16e752->leave($__internal_abda700a864e57d5ad42778bc0ebdb1d2a1ec9afb215bf5df8c97d904d16e752_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_36e94f30ec090e96cc7d534915e9b0a321c9560a09ab015bc87f07c0ffb937b7 = $this->env->getExtension("native_profiler");
        $__internal_36e94f30ec090e96cc7d534915e9b0a321c9560a09ab015bc87f07c0ffb937b7->enter($__internal_36e94f30ec090e96cc7d534915e9b0a321c9560a09ab015bc87f07c0ffb937b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_36e94f30ec090e96cc7d534915e9b0a321c9560a09ab015bc87f07c0ffb937b7->leave($__internal_36e94f30ec090e96cc7d534915e9b0a321c9560a09ab015bc87f07c0ffb937b7_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7426943f87178dd720f99a9c0a449e422634702ec514b1ff65651e433703686f = $this->env->getExtension("native_profiler");
        $__internal_7426943f87178dd720f99a9c0a449e422634702ec514b1ff65651e433703686f->enter($__internal_7426943f87178dd720f99a9c0a449e422634702ec514b1ff65651e433703686f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7426943f87178dd720f99a9c0a449e422634702ec514b1ff65651e433703686f->leave($__internal_7426943f87178dd720f99a9c0a449e422634702ec514b1ff65651e433703686f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2f2b6fee3faafe89368f7220aca1761f7f599e65b4ec3899568e80dd39c76466 = $this->env->getExtension("native_profiler");
        $__internal_2f2b6fee3faafe89368f7220aca1761f7f599e65b4ec3899568e80dd39c76466->enter($__internal_2f2b6fee3faafe89368f7220aca1761f7f599e65b4ec3899568e80dd39c76466_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_2f2b6fee3faafe89368f7220aca1761f7f599e65b4ec3899568e80dd39c76466->leave($__internal_2f2b6fee3faafe89368f7220aca1761f7f599e65b4ec3899568e80dd39c76466_prof);

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
