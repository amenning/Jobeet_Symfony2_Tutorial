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
        $__internal_d56b15623d92a9d7372f37e7f3fc98e9297421266126480d37a90ac16f6e597f = $this->env->getExtension("native_profiler");
        $__internal_d56b15623d92a9d7372f37e7f3fc98e9297421266126480d37a90ac16f6e597f->enter($__internal_d56b15623d92a9d7372f37e7f3fc98e9297421266126480d37a90ac16f6e597f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d56b15623d92a9d7372f37e7f3fc98e9297421266126480d37a90ac16f6e597f->leave($__internal_d56b15623d92a9d7372f37e7f3fc98e9297421266126480d37a90ac16f6e597f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ab66fad21809b5c8a9962c034343d8b4563ced8a76ecd132f68167f2e6c58ff1 = $this->env->getExtension("native_profiler");
        $__internal_ab66fad21809b5c8a9962c034343d8b4563ced8a76ecd132f68167f2e6c58ff1->enter($__internal_ab66fad21809b5c8a9962c034343d8b4563ced8a76ecd132f68167f2e6c58ff1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ab66fad21809b5c8a9962c034343d8b4563ced8a76ecd132f68167f2e6c58ff1->leave($__internal_ab66fad21809b5c8a9962c034343d8b4563ced8a76ecd132f68167f2e6c58ff1_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5bf2df63420ee7bdfaa7d0b801e572b5c8a521176a55f06c33504586ee7a30be = $this->env->getExtension("native_profiler");
        $__internal_5bf2df63420ee7bdfaa7d0b801e572b5c8a521176a55f06c33504586ee7a30be->enter($__internal_5bf2df63420ee7bdfaa7d0b801e572b5c8a521176a55f06c33504586ee7a30be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5bf2df63420ee7bdfaa7d0b801e572b5c8a521176a55f06c33504586ee7a30be->leave($__internal_5bf2df63420ee7bdfaa7d0b801e572b5c8a521176a55f06c33504586ee7a30be_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_728096ecd740637a361bcc5bf2e06614dc6c9b6c743863d72d72141c35591ee8 = $this->env->getExtension("native_profiler");
        $__internal_728096ecd740637a361bcc5bf2e06614dc6c9b6c743863d72d72141c35591ee8->enter($__internal_728096ecd740637a361bcc5bf2e06614dc6c9b6c743863d72d72141c35591ee8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_728096ecd740637a361bcc5bf2e06614dc6c9b6c743863d72d72141c35591ee8->leave($__internal_728096ecd740637a361bcc5bf2e06614dc6c9b6c743863d72d72141c35591ee8_prof);

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
