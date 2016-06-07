<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_f484198884ebabdef6091d5aefc1a1a4a740787291656e8ff245f457d037a9c2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a33043d82e49281226d242d8d12344ea675b8ab65754b706135dc8f9620df09b = $this->env->getExtension("native_profiler");
        $__internal_a33043d82e49281226d242d8d12344ea675b8ab65754b706135dc8f9620df09b->enter($__internal_a33043d82e49281226d242d8d12344ea675b8ab65754b706135dc8f9620df09b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_a33043d82e49281226d242d8d12344ea675b8ab65754b706135dc8f9620df09b->leave($__internal_a33043d82e49281226d242d8d12344ea675b8ab65754b706135dc8f9620df09b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
