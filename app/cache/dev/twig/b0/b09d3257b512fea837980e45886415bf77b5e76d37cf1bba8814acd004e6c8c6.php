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
        $__internal_4fad7f60420224c15eeedaecdfea2bd85899da100ecbb2b1a3ff23b7f8c4fe26 = $this->env->getExtension("native_profiler");
        $__internal_4fad7f60420224c15eeedaecdfea2bd85899da100ecbb2b1a3ff23b7f8c4fe26->enter($__internal_4fad7f60420224c15eeedaecdfea2bd85899da100ecbb2b1a3ff23b7f8c4fe26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4fad7f60420224c15eeedaecdfea2bd85899da100ecbb2b1a3ff23b7f8c4fe26->leave($__internal_4fad7f60420224c15eeedaecdfea2bd85899da100ecbb2b1a3ff23b7f8c4fe26_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a2b3ec8a81d74ea2dceff7b6bf44a28187d3afb46f14e92fedf643607cdabd36 = $this->env->getExtension("native_profiler");
        $__internal_a2b3ec8a81d74ea2dceff7b6bf44a28187d3afb46f14e92fedf643607cdabd36->enter($__internal_a2b3ec8a81d74ea2dceff7b6bf44a28187d3afb46f14e92fedf643607cdabd36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a2b3ec8a81d74ea2dceff7b6bf44a28187d3afb46f14e92fedf643607cdabd36->leave($__internal_a2b3ec8a81d74ea2dceff7b6bf44a28187d3afb46f14e92fedf643607cdabd36_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8c0c991be85526448884f9572fde2d3ef5a6c7eb16385be5d5b4dca85971f7b6 = $this->env->getExtension("native_profiler");
        $__internal_8c0c991be85526448884f9572fde2d3ef5a6c7eb16385be5d5b4dca85971f7b6->enter($__internal_8c0c991be85526448884f9572fde2d3ef5a6c7eb16385be5d5b4dca85971f7b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8c0c991be85526448884f9572fde2d3ef5a6c7eb16385be5d5b4dca85971f7b6->leave($__internal_8c0c991be85526448884f9572fde2d3ef5a6c7eb16385be5d5b4dca85971f7b6_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6f79344a7d6930b9aa3fe0202141e576809549c07a68865495b05ac6b9f8c56b = $this->env->getExtension("native_profiler");
        $__internal_6f79344a7d6930b9aa3fe0202141e576809549c07a68865495b05ac6b9f8c56b->enter($__internal_6f79344a7d6930b9aa3fe0202141e576809549c07a68865495b05ac6b9f8c56b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_6f79344a7d6930b9aa3fe0202141e576809549c07a68865495b05ac6b9f8c56b->leave($__internal_6f79344a7d6930b9aa3fe0202141e576809549c07a68865495b05ac6b9f8c56b_prof);

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
