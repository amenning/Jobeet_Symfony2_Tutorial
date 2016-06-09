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
        $__internal_c902c96a7003fdec27b2a3cd99a9abb3a1f31f0ad3593923c3f42e40e6ef085c = $this->env->getExtension("native_profiler");
        $__internal_c902c96a7003fdec27b2a3cd99a9abb3a1f31f0ad3593923c3f42e40e6ef085c->enter($__internal_c902c96a7003fdec27b2a3cd99a9abb3a1f31f0ad3593923c3f42e40e6ef085c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c902c96a7003fdec27b2a3cd99a9abb3a1f31f0ad3593923c3f42e40e6ef085c->leave($__internal_c902c96a7003fdec27b2a3cd99a9abb3a1f31f0ad3593923c3f42e40e6ef085c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2a5544deb04e3ada519810bcfa8cfddc38b441ff798519c3e57127c126f1dcdf = $this->env->getExtension("native_profiler");
        $__internal_2a5544deb04e3ada519810bcfa8cfddc38b441ff798519c3e57127c126f1dcdf->enter($__internal_2a5544deb04e3ada519810bcfa8cfddc38b441ff798519c3e57127c126f1dcdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2a5544deb04e3ada519810bcfa8cfddc38b441ff798519c3e57127c126f1dcdf->leave($__internal_2a5544deb04e3ada519810bcfa8cfddc38b441ff798519c3e57127c126f1dcdf_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_03ff8621f00522521285b6395e9be278a59cc17615e62e281168f2bcf32891e6 = $this->env->getExtension("native_profiler");
        $__internal_03ff8621f00522521285b6395e9be278a59cc17615e62e281168f2bcf32891e6->enter($__internal_03ff8621f00522521285b6395e9be278a59cc17615e62e281168f2bcf32891e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_03ff8621f00522521285b6395e9be278a59cc17615e62e281168f2bcf32891e6->leave($__internal_03ff8621f00522521285b6395e9be278a59cc17615e62e281168f2bcf32891e6_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d23e864de662c2215717ff95728e901b195449a1ca4a31b367a38934c6f93d5e = $this->env->getExtension("native_profiler");
        $__internal_d23e864de662c2215717ff95728e901b195449a1ca4a31b367a38934c6f93d5e->enter($__internal_d23e864de662c2215717ff95728e901b195449a1ca4a31b367a38934c6f93d5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d23e864de662c2215717ff95728e901b195449a1ca4a31b367a38934c6f93d5e->leave($__internal_d23e864de662c2215717ff95728e901b195449a1ca4a31b367a38934c6f93d5e_prof);

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
