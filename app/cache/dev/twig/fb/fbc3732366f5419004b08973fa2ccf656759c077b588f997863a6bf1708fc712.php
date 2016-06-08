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
        $__internal_5a31eb41a5f8880ebcdae54250ff915b6e3ab189e90f392956ae5ee886fbf953 = $this->env->getExtension("native_profiler");
        $__internal_5a31eb41a5f8880ebcdae54250ff915b6e3ab189e90f392956ae5ee886fbf953->enter($__internal_5a31eb41a5f8880ebcdae54250ff915b6e3ab189e90f392956ae5ee886fbf953_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a31eb41a5f8880ebcdae54250ff915b6e3ab189e90f392956ae5ee886fbf953->leave($__internal_5a31eb41a5f8880ebcdae54250ff915b6e3ab189e90f392956ae5ee886fbf953_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6627649b57e75ba2c71b983ed194be391eae9e65954accde2422b7ea798a868f = $this->env->getExtension("native_profiler");
        $__internal_6627649b57e75ba2c71b983ed194be391eae9e65954accde2422b7ea798a868f->enter($__internal_6627649b57e75ba2c71b983ed194be391eae9e65954accde2422b7ea798a868f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6627649b57e75ba2c71b983ed194be391eae9e65954accde2422b7ea798a868f->leave($__internal_6627649b57e75ba2c71b983ed194be391eae9e65954accde2422b7ea798a868f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_657bff1743ea232f2910bcdbcc6bb824be865ea56889c8655eb8ed12258a8853 = $this->env->getExtension("native_profiler");
        $__internal_657bff1743ea232f2910bcdbcc6bb824be865ea56889c8655eb8ed12258a8853->enter($__internal_657bff1743ea232f2910bcdbcc6bb824be865ea56889c8655eb8ed12258a8853_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_657bff1743ea232f2910bcdbcc6bb824be865ea56889c8655eb8ed12258a8853->leave($__internal_657bff1743ea232f2910bcdbcc6bb824be865ea56889c8655eb8ed12258a8853_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_85ff6a813c39b40c3116e63fa206dd8f7d67b8f6a119e598486411bbdeef95ad = $this->env->getExtension("native_profiler");
        $__internal_85ff6a813c39b40c3116e63fa206dd8f7d67b8f6a119e598486411bbdeef95ad->enter($__internal_85ff6a813c39b40c3116e63fa206dd8f7d67b8f6a119e598486411bbdeef95ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_85ff6a813c39b40c3116e63fa206dd8f7d67b8f6a119e598486411bbdeef95ad->leave($__internal_85ff6a813c39b40c3116e63fa206dd8f7d67b8f6a119e598486411bbdeef95ad_prof);

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
