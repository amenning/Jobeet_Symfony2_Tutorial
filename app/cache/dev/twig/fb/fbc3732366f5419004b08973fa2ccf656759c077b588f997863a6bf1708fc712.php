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
        $__internal_886e59393a1d9a2dfdba21a519a0d5ded7f9643a4722880096f2be576c9aa0b7 = $this->env->getExtension("native_profiler");
        $__internal_886e59393a1d9a2dfdba21a519a0d5ded7f9643a4722880096f2be576c9aa0b7->enter($__internal_886e59393a1d9a2dfdba21a519a0d5ded7f9643a4722880096f2be576c9aa0b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_886e59393a1d9a2dfdba21a519a0d5ded7f9643a4722880096f2be576c9aa0b7->leave($__internal_886e59393a1d9a2dfdba21a519a0d5ded7f9643a4722880096f2be576c9aa0b7_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e74fcb97008dcf48a4bd14113cef82c9d3638913ef1827331981c7c77a71bb93 = $this->env->getExtension("native_profiler");
        $__internal_e74fcb97008dcf48a4bd14113cef82c9d3638913ef1827331981c7c77a71bb93->enter($__internal_e74fcb97008dcf48a4bd14113cef82c9d3638913ef1827331981c7c77a71bb93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e74fcb97008dcf48a4bd14113cef82c9d3638913ef1827331981c7c77a71bb93->leave($__internal_e74fcb97008dcf48a4bd14113cef82c9d3638913ef1827331981c7c77a71bb93_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7ab8cfdbad4a0340e6a5e1f3fd07fbe18e05aca0ed5ecefd93cd20c381303a8c = $this->env->getExtension("native_profiler");
        $__internal_7ab8cfdbad4a0340e6a5e1f3fd07fbe18e05aca0ed5ecefd93cd20c381303a8c->enter($__internal_7ab8cfdbad4a0340e6a5e1f3fd07fbe18e05aca0ed5ecefd93cd20c381303a8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7ab8cfdbad4a0340e6a5e1f3fd07fbe18e05aca0ed5ecefd93cd20c381303a8c->leave($__internal_7ab8cfdbad4a0340e6a5e1f3fd07fbe18e05aca0ed5ecefd93cd20c381303a8c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ab85e76b89a23db86d817b4af2d0be86916f75320feb4bec9b6905f08f3ffa25 = $this->env->getExtension("native_profiler");
        $__internal_ab85e76b89a23db86d817b4af2d0be86916f75320feb4bec9b6905f08f3ffa25->enter($__internal_ab85e76b89a23db86d817b4af2d0be86916f75320feb4bec9b6905f08f3ffa25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ab85e76b89a23db86d817b4af2d0be86916f75320feb4bec9b6905f08f3ffa25->leave($__internal_ab85e76b89a23db86d817b4af2d0be86916f75320feb4bec9b6905f08f3ffa25_prof);

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
