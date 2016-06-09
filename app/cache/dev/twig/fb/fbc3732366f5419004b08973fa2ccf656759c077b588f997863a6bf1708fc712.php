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
        $__internal_ab30cdcc9d5575827b276fc73c697026cfa74a2b60154a255a94d5c50e7c539c = $this->env->getExtension("native_profiler");
        $__internal_ab30cdcc9d5575827b276fc73c697026cfa74a2b60154a255a94d5c50e7c539c->enter($__internal_ab30cdcc9d5575827b276fc73c697026cfa74a2b60154a255a94d5c50e7c539c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ab30cdcc9d5575827b276fc73c697026cfa74a2b60154a255a94d5c50e7c539c->leave($__internal_ab30cdcc9d5575827b276fc73c697026cfa74a2b60154a255a94d5c50e7c539c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e40b241d043e1b389603fdfd9c08df2e4c2ebfc2611baf94995193c8fde21fd1 = $this->env->getExtension("native_profiler");
        $__internal_e40b241d043e1b389603fdfd9c08df2e4c2ebfc2611baf94995193c8fde21fd1->enter($__internal_e40b241d043e1b389603fdfd9c08df2e4c2ebfc2611baf94995193c8fde21fd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e40b241d043e1b389603fdfd9c08df2e4c2ebfc2611baf94995193c8fde21fd1->leave($__internal_e40b241d043e1b389603fdfd9c08df2e4c2ebfc2611baf94995193c8fde21fd1_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_22f56c4525d8f343bcc2be24b17f4ed438825352188a3b633aa8131ae1726d2e = $this->env->getExtension("native_profiler");
        $__internal_22f56c4525d8f343bcc2be24b17f4ed438825352188a3b633aa8131ae1726d2e->enter($__internal_22f56c4525d8f343bcc2be24b17f4ed438825352188a3b633aa8131ae1726d2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_22f56c4525d8f343bcc2be24b17f4ed438825352188a3b633aa8131ae1726d2e->leave($__internal_22f56c4525d8f343bcc2be24b17f4ed438825352188a3b633aa8131ae1726d2e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b9a148dfbc8ab008b3c8f53d29216d22b37285fd0693b553b517e9192eba22de = $this->env->getExtension("native_profiler");
        $__internal_b9a148dfbc8ab008b3c8f53d29216d22b37285fd0693b553b517e9192eba22de->enter($__internal_b9a148dfbc8ab008b3c8f53d29216d22b37285fd0693b553b517e9192eba22de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_b9a148dfbc8ab008b3c8f53d29216d22b37285fd0693b553b517e9192eba22de->leave($__internal_b9a148dfbc8ab008b3c8f53d29216d22b37285fd0693b553b517e9192eba22de_prof);

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
